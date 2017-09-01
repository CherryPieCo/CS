<?php

namespace App\Models;

use Yaro\Jarboe\Models\Structure as BaseStructure;

class Structure extends BaseStructure
{
    public static function getTemplates()
    {
        return [
            'mainpage' => [
                'caption' => 'Mainpage',
                'type' => 'node',
                'action' => 'App\Http\Controllers\MainController@index',
                'definition' => '',
                'node_definition' => \Yaro\Jarboe\Definition\Node::class,
                'check' => function() {
                    return true;
                },
            ],
            'products' => [
                'caption' => 'Products catalog',
                'type' => 'table',
                'action' => 'App\Http\Controllers\MainController@catalog',
                'definition' => \App\Definitions\Products::class,
                'node_definition' => \Yaro\Jarboe\Definition\Node::class,
                'check' => function() {
                    return true;
                },
                'route' => [
                    'action' => 'App\Http\Controllers\MainController@product',
                    'slug' => '{id}/{title}',
                    'patterns' => [
                        'id' => '[0-9]+',
                        'title' => '[a-z0-9-]+'
                    ],
                ]
            ],
            'content' => [
                'caption' => 'Content page',
                'type' => 'node',
                'action' => 'App\Http\Controllers\MainController@content',
                'definition' => '',
                'node_definition' => \Yaro\Jarboe\Definition\Node::class,
                'check' => function() {
                    return true;
                },
            ],
            /*
            'table sample' => array(
                'caption' => 'Test table',
                'type' => 'table', 
                'action' => 'HomeController@showPage',
                'definition' => \App\Definitions\Test::class,
                'node_definition' => \Yaro\Jarboe\Definition\Node::class,
                'check' => function() {
                    return true;
                },
                'route' => [
                    'action' => 'App\Http\Controllers\SomeController@showTableRow',
                    'slug' => 'well-{id}',
                    'patterns' => [
                        'id' => '[0-9]+'
                    ],
                ]
            ),
            'breadcrumbs' => array(
                'caption' => 'Breadcrumbs',
                'type' => 'node', 
                'action' => 'App\Http\Controllers\SomeController@breadcrumbs',
                'definition' => 'node', 
                'node_definition' => 'node',
                'check' => function() {
                    return true;
                },
            ),
            */
        ];
    } // end getTemplates
}
