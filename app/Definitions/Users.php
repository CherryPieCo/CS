<?php

namespace App\Definitions;

use Yaro\Jarboe\Definition\AbstractDefinition as Definition;

class Users extends Definition
{
    protected function initDatabase($container)
    {
        $container->put('table', 'users');
        $container->put('order', [
            'id' => 'ASC',
        ]);
        $container->put('paginate', 12);
    } // end initDatabase
    
    protected function initOptions($container)
    {
        $container->put('caption', 'Пользователи');
    } // end initOptions
    
    protected function initFields()
    {
        $this->createField('id', [
            'caption' => '#',
            'type' => 'readonly',
            'filter' => 'text',
            'class' => 'col-id',
            'width' => '1%',
            'hide' => true,
            'is_sorting' => true
        ]);
        
        $this->createField('email', [
            'caption' => 'Email',
            'type' => 'text',
            'filter' => 'text',
            'is_sorting' => true,
            'validation' => array(
                'server' => array(
                    'rules' => 'email|required'
                ),
                'client' => array(
                    'rules' => array(
                        'required' => true,
                        'email'    => true
                    ),
                    'messages' => array(
                        'required' => 'Обязательно к заполнению',
                        'email'    => 'Невалидный email'
                    )
                )
            ),
        ]);
        
        $this->createField('first_name', [
            'caption' => 'Имя',
            'type'    => 'text',
            'filter' => 'text',
            'validation' => array(
                'server' => array(
                    'rules' => 'required'
                ),
                'client' => array(
                    'rules' => array(
                        'required' => true
                    ),
                    'messages' => array(
                        'required' => 'Обязательно к заполнению'
                    )
                )
            ),
        ]);
        
        $this->createField('last_name', [
            'caption' => 'Фамилия',
            'type'    => 'text',
            'filter' => 'text',
            'validation' => array(
                'server' => array(
                    'rules' => 'required'
                ),
                'client' => array(
                    'rules' => array(
                        'required' => true
                    ),
                    'messages' => array(
                        'required' => 'Обязательно к заполнению'
                    )
                )
            ),
        ]);
        
        $this->createField('pattern.user_permissions', [
            'caption' => 'Права',
            'hide_list' => true,
        ]);
        
        $this->createField('pattern.user_activation', [
            'caption' => 'Активация',
            'hide_list' => true,
        ]);
        
        $this->createField('pattern.user_password', [
            'caption' => 'Пароль',
            'hide_list' => true,
        ]);
        
        $this->createField('pattern.user_roles', [
            'caption' => 'Группы',
            'hide_list' => true,
        ]);
    } // end initFields
    
    protected function initFilters($container)
    {
        
    } // end initFilters
    
    protected function initActions(&$container)
    {
        $container = [
            'search' => array(
                'caption' => 'Search',
            ),
            'insert' => array(
                'caption' => 'Create',
                'check' => function() {
                    return true;
                }
            ),
            'update' => array(
                'caption' => 'Update',
                'check' => function() {
                    return true;
                }
            ),
            'delete' => array(
                'caption' => 'Remove',
                'check' => function() {
                    return true;
                }
            ),
        ];
    } // end initActions
    
    protected function initPosition($container)
    {
        $container->put('tabs', [
            'Инфо' => [['first_name', 'last_name'], 'email', 'pattern.user_password'],
            'Права' => ['pattern.user_permissions'],
            'Активность' => ['pattern.user_activation'],
            'Roles' => ['pattern.user_roles'],
        ]);
    } // end initPosition
    
    protected function callbackDeleteRow($id)
    {
        $user = \Sentinel::findUserById($id);
        $user->delete();
        
        return [
            'id'     => $id,
            'status' => true
        ];
    } // end callbackDeleteRow
    
}
