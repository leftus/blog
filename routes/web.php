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

Route::group(['middleware' => ['web'],'namespace' => 'shop',''], function(){
  Route::get('/', 'IndexController@index');
  Route::get('/categorys/{category_id?}', 'IndexController@categorys');
  Route::get('/contacts', 'IndexController@contacts');
  Route::get('/details/{product_id?}', 'IndexController@details');
  Route::get('/cart', 'IndexController@cart');
  Route::get('/wechat', 'WechatController@index');
});
