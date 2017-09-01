<?php

namespace App\Definitions\Patterns;

use Yaro\Jarboe\Definition\AbstractPattern as Pattern;

class UserPassword extends Pattern
{
    
    public function viewForm($row)
    {
        return view('jarboe.definition.users.patterns.user_password');
    } // end viewForm
    
    public function handleInsert($idRow, $patternValue, $values)
    {
        $password = trim($patternValue);
        if (!$password) {
            // FIXME: translations
            throw new \Yaro\Jarboe\Exceptions\JarboeValidationException(
                'Password is rquired'
            );
        }
        
        $user = \Sentinel::findById($idRow);
        \Sentinel::update($user, compact('password'));
    } // end handleInsert
    
    public function handleUpdate($idRow, $patternValue, $values)
    {
        $password = trim($patternValue);
        if (!$password) {
            return;
        }
        
        $user = \Sentinel::findById($idRow);
        \Sentinel::update($user, compact('password'));
    } // end handleUpdate
}

