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
    $router->resource('employers', EmployerController::class);
    $router->resource('packs', PackController::class);
    $router->resource('products', ProductController::class);
    $router->resource('users', UserController::class);
    $router->resource('categorys', CategoryController::class);
    $router->resource('pictures', PictureController::class);
});
