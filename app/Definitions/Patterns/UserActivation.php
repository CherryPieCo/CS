<?php

namespace App\Definitions\Patterns;

use Yaro\Jarboe\Definition\AbstractPattern as Pattern;

class UserActivation extends Pattern
{
    public function viewForm($row)
    {
        $isActive = false;
        if ($row) {
            $user = \Sentinel::findById($row->id);
            $isActive = \Activation::completed($user);
        }

        return view('jarboe.definition.users.patterns.user_activation', compact('isActive'));
    } // end viewForm
    
    public function handleInsert($idRow, $patternValue, $values)
    {
        if ($patternValue == 'deactivate') {
            return;
        }
        
        $user = \Sentinel::findById($idRow);
        $activation = \Activation::create($user);
        \Activation::complete($user, $activation->code);
    } // end handleInsert
    
    public function handleUpdate($idRow, $patternValue, $values)
    {
        $user = \Sentinel::findById($idRow);
        $activation = \Activation::completed($user);
        
        if (!$activation && $patternValue == 'deactivate') {
            return;
        } elseif ($activation && $patternValue == 'deactivate') {
            \Activation::remove($user);
        } elseif (!$activation && $patternValue == 'activate') {
            $activation = \Activation::create($user);
            \Activation::complete($user, $activation->code);
        }
    } // end handleUpdate
}

