<?php

namespace App\Definitions;

use Yaro\Jarboe\Definition\AbstractDefinition as Definition;

class Finances extends Definition
{
    
    protected function initDatabase($container)
    {
        $container->put('table', 'finances');
        $container->put('order', [
            'id' => 'DESC',
        ]);
        $container->put('paginate', 12);
    } // end initDatabase
    
    protected function initOptions($container)
    {
        $container->put('caption', 'financess');
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
        
        $this->createField('amount', [
            'caption' => 'Сумма',
            'type' => 'int',
            'filter' => 'text',
            'is_sorting' => true,
        ]);
        
        $this->createField('id_type', [
            'caption' => 'Тип',
            'type'    => 'foreign',
            'select_type' => 'select2',
            'foreign_table'       => 'finance_types',
            'foreign_key_field'   => 'id',
            'foreign_value_field' => 'title',
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

