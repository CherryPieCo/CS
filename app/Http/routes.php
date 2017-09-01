<?php

Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[a-z0-9-]+');

if (file_exists(__DIR__ .'/routes_dev.php')) {
    include __DIR__ .'/routes_dev.php';
}
include __DIR__ .'/routes_backend.php';


//
Route::get('/', function () {
    return app('sentinel.roles')->all();
});

App\Models\Structure::registerRoutes();


View::composer('partials.header', function($view) {
    $view->with('nodes', \App\Models\Structure::find(1)->getDescendantsAndSelf(1));
});