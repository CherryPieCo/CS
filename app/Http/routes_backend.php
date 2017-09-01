<?php

Route::group([
    'prefix' => config('jarboe.admin.uri'), 
    'middleware' => [
        'web',
        Yaro\Jarboe\Http\Middleware\AuthAdmin::class, 
        Yaro\Jarboe\Http\Middleware\CheckPermissions::class,
    ]
], function () {

    Route::any('/settings', 'TableAdminController@settings');
    
    Route::any('/users', 'TableAdminController@users');
    Route::any('/roles', 'TableAdminController@roles');

    Route::any('/test', 'TableAdminController@test');
    Route::any('/finances', 'TableAdminController@finances');
    Route::any('/finance-types', 'TableAdminController@financeTypes');
    
    
    Route::any('/structure', 'TableAdminController@structure');
});
