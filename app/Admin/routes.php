<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('contacts', ContactController::class);
    $router->resource('articles', ArticleController::class);
    $router->resource('skills', SkillController::class);
    $router->resource('employees', EmployeeController::class);
});
