<?php

namespace App\Definitions\Patterns;

use Yaro\Jarboe\Definition\AbstractPattern as Pattern;

class RolePermissions extends Pattern
{
    
    public function viewForm($row)
    {
        $permissions = config('jarboe.users.permissions', []);
        $groupPermissions = [];
        if ($row) {
            $groupPermissions = \Sentinel::findRoleById($row->id)->permissions;
        }
        $groupPermissions = $groupPermissions ?: [];

        $data = compact('groupPermissions', 'permissions');
        return view('jarboe.definition.users.patterns.role_permissions', $data);
    } // end viewForm
    
    public function handleInsert($idRow, $patternValue, $values)
    {
        $group = \Sentinel::findRoleById($idRow);
        
        foreach ($patternValue as $permissionGroup => $permissionActions) {
            foreach ($permissionActions as $permissionAction => $permission) {
                $ident = $permissionGroup .'.'. $permissionAction;
                switch ($permission) {
                    case 'allow':
                        $group->updatePermission($ident, true, true);
                        break;
                    
                    case 'deny':
                        $group->updatePermission($ident, false, true);
                        break;
                        
                    default:
                        $msg = sprintf('Not allowed permission [%s] for [%s]', $permission, $ident);
                        throw new \RuntimeException($msg);
                }
            }
        }
        
        $group->save();
    } // end handleInsert
    
    public function handleUpdate($idRow, $patternValue, $values)
    {
        $group = \Sentinel::findRoleById($idRow);
            
        foreach ($patternValue as $permissionGroup => $permissionActions) {
            foreach ($permissionActions as $permissionAction => $permission) {
                $ident = $permissionGroup .'.'. $permissionAction;
                switch ($permission) {
                    case 'allow':
                        $group->updatePermission($ident, true, true);
                        break;
                    
                    case 'deny':
                        $group->updatePermission($ident, false, true);
                        break;
                        
                    default:
                        $msg = sprintf('Not allowed permission [%s] for [%s]', $permission, $ident);
                        throw new \RuntimeException($msg);
                }
            }
        }
        
        $group->save();
    } // end handleUpdate
    
}
