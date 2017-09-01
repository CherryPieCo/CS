<?php

namespace App\Definitions;

use Yaro\Jarboe\Definition\AbstractDefinition as Definition;

class Products extends Definition
{
    
    protected function initDatabase($container)
    {
        $container->put('table', 'products');
        $container->put('order', [
            'id' => 'ASC',
        ]);
        $container->put('paginate', 12);
    } // end initDatabase
    
    protected function initOptions($container)
    {
        $container->put('caption', 'Products');
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
        
        $this->createField('title', [
            'caption' => 'title',
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
            'caption' => 'description',
            'type' => 'textarea',
            'rows' => 8,
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
        
        $this->createField('availability', [
            'caption' => 'Availability',
            'type' => 'select',
            'filter' => 'select',
            'options' => [
                'in_stock' => 'In stock',
                'out_of_stock' => 'Out of stock',
            ]
        ]);
        $this->createField('price', [
            'caption' => 'Price',
            'type' => 'text',
        ]);
        
        $this->createField('is_active', [
            'caption' => 'Active',
            'type' => 'checkbox',
            'filter' => 'select',
            'options' => [
                '1' => 'Yes',
                '0' => 'No',
            ]
        ]);
        
        $this->createField('images', [
            'caption' => 'Images',
            'type'    => 'image',
            'is_multiple' => true,
            'cropp'   => true,
        ]);
    } // end initFields
    
    protected function initFilters($container)
    {
        $container->put('id_catalog', [
            'sign'  => '=',
            'value' => $this->getOption('additional')['node']
        ]);
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
    
}

