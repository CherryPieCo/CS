<?php

namespace App\Definitions\Patterns;

use Yaro\Jarboe\Definition\AbstractPattern as Pattern;

class UserRoles extends Pattern
{
    
    public function viewForm($row)
    {
        $roles = app('sentinel.roles')->all();
        $user = $row ? \Sentinel::findById($row->id) : null;

        return view('jarboe.definition.users.patterns.user_roles', compact('roles', 'user'));
    } // end viewForm
    
    public function handleInsert($idRow, $patternValue, $values)
    {
        $user = \Sentinel::findById($idRow);
        
        $roles = $patternValue ?: [];
        foreach ($roles as $id) {
            $role = \Sentinel::findRoleById($id);
            $role->users()->attach($user);
        }
    } // end handleInsert
    
    public function handleUpdate($idRow, $patternValue, $values)
    {
        $user = \Sentinel::findById($idRow);
        
        $roles = app('sentinel.roles')->all();
        foreach ($roles as $role) {
            $role->users()->detach($user);
        }
        
        $roles = $patternValue ?: [];
        foreach ($roles as $id => $isActive) {
            if (!$isActive) {
                continue;
            }
            $role = \Sentinel::findRoleById($id);
            $role->users()->attach($user);
        }
    } // end handleUpdate
    
}
