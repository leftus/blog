<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'shop'], function(){
  Route::get('/', 'IndexController@index');
  Route::get('/categorys/{category_id?}', 'IndexController@categorys');
});
