<?php

namespace App\Definitions;

use Yaro\Jarboe\Definition\AbstractDefinition as Definition;

class Roles extends Definition
{
    protected function initDatabase($container)
    {
        $container->put('table', 'roles');
        $container->put('order', [
            'id' => 'ASC',
        ]);
        $container->put('paginate', 12);
    } // end initDatabase
    
    protected function initOptions($container)
    {
        $container->put('caption', 'Группы пользователей');
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
        
        $this->createField('slug', [
            'caption' => 'Идентификатор',
            'type' => 'text',
            'filter' => 'text',
            'is_sorting' => true,
            'validation' => [
                'server' => [
                    'rules' => 'required'
                ],
                'client' => [
                    'rules' => [
                        'required' => true
                    ],
                    'messages' => [
                        'required' => 'Обязательно к заполнению'
                    ]
                ]
            ],
        ]);
        
        $this->createField('name', [
            'caption' => 'Название',
            'type' => 'text',
            'filter' => 'text',
            'is_sorting' => true,
        ]);
        
        $this->createField('pattern.role_permissions', [
            'caption' => 'Права',
            'hide_list' => true,
        ]);
    } // end initFields
    
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
            'Info' => ['slug', 'name'],
            'Permissions' => ['pattern.role_permissions'],
        ]);
    } // end initPosition
    
    protected function callbackDeleteRow($id)
    {
        $role = \Sentinel::findRoleById($id);
        $role->delete();
        
        return array(
            'id'     => $id,
            'status' => true
        );
    } // end callbackDeleteRow
    
}
