<?php

namespace App\Definitions;

use Yaro\Jarboe\Definition\AbstractDefinition as Definition;

class Settings extends Definition
{
    
    protected function initDatabase($container)
    {
        $container->put('table', 'settings');
        $container->put('order', [
            'id' => 'ASC',
        ]);
        $container->put('paginate', 12);
    } // end initDatabase
    
    protected function initOptions($container)
    {
        $container->put('caption', 'Settings');
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
        
        $this->createField('name', [
            'caption' => 'Ident',
            'type' => 'text',
            'filter' => 'text',
            'is_sorting' => true,
            'validation' => array(
                'server' => array(
                    'rules' => 'required'
                ),
                'client' => array(
                    'rules' => array(
                        'required' => true
                    ),
                    'messages' => array(
                        'required' => 'The field is required'
                    )   
                )
            )
        ]);
        
        $this->createField('value', [
            'caption' => 'Value',
            'type' => 'text',
            'filter' => 'text',
            'is_sorting' => true,
            'validation' => array(
                'server' => array(
                    'rules' => 'required'
                ),
                'client' => array(
                    'rules' => array(
                        'required' => true
                    ),
                    'messages' => array(
                        'required' => 'The field is required'
                    )   
                )
            )
        ]);
        
        $this->createField('description', [
            'caption' => 'Description',
            'type' => 'text',
            'filter' => 'text'
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
    
}

