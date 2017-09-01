<?php

namespace App\Definitions\Patterns;

use Yaro\Jarboe\Definition\AbstractPattern as Pattern;

class UserPermissions extends Pattern
{
    
    public function viewForm($row)
    {
        $permissions = config('jarboe.users.permissions', []);
        $userPermissions = [];
        if ($row) {
            $userPermissions = \Sentinel::findById($row->id)->permissions;
        }
        $userPermissions = $userPermissions ?: [];

        $data = compact('userPermissions', 'permissions');
        return view('jarboe.definition.users.patterns.user_permissions', $data);
    } // end viewForm
    
    public function handleInsert($idRow, $patternValue, $values)
    {
        $user = \Sentinel::findById($idRow);
        
        foreach ($patternValue as $permissionGroup => $permissionActions) {
            foreach ($permissionActions as $permissionAction => $permission) {
                $ident = $permissionGroup .'.'. $permissionAction;
                switch ($permission) {
                    case 'allow':
                        $user->addPermission($ident);
                        break;
                    
                    case 'deny':
                        $user->addPermission($ident, false);
                        break;
                        
                    case 'remove':
                        $user->removePermission($ident);
                        break;
                        
                    default:
                        $msg = sprintf('Not allowed permission [%s] for [%s]', $permission, $ident);
                        throw new \RuntimeException($msg);
                }
            }
        }
        
        $user->save();
    } // end handleInsert
    
    public function handleUpdate($idRow, $patternValue, $values)
    {
        $user = \Sentinel::findById($idRow);

        foreach ($patternValue as $permissionGroup => $permissionActions) {
            foreach ($permissionActions as $permissionAction => $permission) {
                $ident = $permissionGroup .'.'. $permissionAction;
                switch ($permission) {
                    case 'allow':
                        $user->addPermission($ident);
                        break;
                    
                    case 'deny':
                        $user->addPermission($ident, false);
                        break;
                        
                    case 'remove':
                        $user->removePermission($ident);
                        break;
                        
                    default:
                        $msg = sprintf('Not allowed permission [%s] for [%s]', $permission, $ident);
                        throw new \RuntimeException($msg);
                }
            }
        }
        
        $user->save();
    } // end handleUpdate
    
}
