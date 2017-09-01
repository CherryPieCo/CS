<?php

namespace App\Definitions;

use Yaro\Jarboe\Definition\AbstractDefinition as Definition;

class Test extends Definition
{
    
    protected function initDatabase($container)
    {
        $container->put('table', 'test');
        $container->put('order', [
            'id' => 'ASC',
        ]);
        $container->put('paginate', 12);
    } // end initDatabase
    
    protected function initOptions($container)
    {
        $container->put('caption', 'Test');
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
        
        $this->createField('text', [
            'caption' => 'Ident',
            'type' => 'text',
            'filter' => 'text',
            'is_sorting' => true,
        ]);
        
        $this->createField('textarea', [
            'caption' => 'textarea',
            'type' => 'textarea',
            'filter' => 'text',
            'is_sorting' => true,
        ]);
        
        $this->createField('selectfield', [
            'caption' => 'select',
            'type' => 'select',
            'filter' => 'select',
            'is_sorting' => true,
            'options' => [
                'one' => 'One',
                'two'  => 'Two',
                'three'  => 'Three',
            ],
        ]);
        
        $this->createField('checkbox', [
            'caption' => 'checkbox',
            'type' => 'checkbox',
            'filter' => 'select',
            'is_null' => true,
            'is_sorting' => true,
            'options' => [
                '1' => 'Yes',
                '0'  => 'No',
            ],
        ]);
        
        $this->createField('wysiwyg', [
            'caption' => 'wysiwyg',
            'type'    => 'wysiwyg',
            'wysiwyg' => 'redactor',
        ]);
        
        $this->createField('date', [
            'caption' => 'date',
            'type'    => 'date',
        ]);
        
        $this->createField('datetime', [
            'caption' => 'datetime',
            'type'    => 'datetime',
            'months'   => 2,
            'is_range' => true
        ]);
        
        $this->createField('timestamp', [
            'caption' => 'timestamp',
            'type'    => 'timestamp',
        ]);
        
        $this->createField('image', [
            'caption' => 'image',
            'type'    => 'image',
            'cropp'   => true,
            'visible_count' => 2,
            'img_attributes' => array(
                'ru' => array(
                    'caption' => 'ru',
                    'inputs' => array(
                        'oh' => array(
                            'caption' => 'Oh',
                            'type' => 'text',
                        ),
                        'hai' => array(
                            'caption' => 'Oh',
                            'type' => 'text',
                        ),
                    ),
                ),
                'en' => array(
                    'caption' => 'en',
                    'inputs' => array(
                        'oh' => array(
                            'caption' => 'Oh',
                            'type' => 'text',
                        ),
                        'hai' => array(
                            'caption' => 'Oh',
                            'type' => 'text',
                        ),
                    ),
                ),
            ),
        ]);
        
        $this->createField('images', [
            'caption' => 'images',
            'type'    => 'image',
            'cropp'   => true,
            'is_multiple' => true,
            'variations' => array(
                'thumb' => array(
                    'resize'    => array(130, 120),
                    'greyscale' => array(),
                    'pixelate'  => array(12)
                )
            ),
            'quality' => 90
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

