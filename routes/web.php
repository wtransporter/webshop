<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/articles/{article}', 'ArticlesController@show')->name('article');
Route::get('/categories/{category}', 'CategoriesController@show')->name('categories.show');

Route::get('/profiles/{user}/history', 'HistoryOrdersController@index');
Route::get('/profiles/{user}/history/{order}', 'HistoryOrdersController@show');

Route::group(['prefix'=> 'tp-admin', 'namespace' => 'Admin',], function () {

    Route::get('/home', 'PagesController@index')->name('dashboard');
    Route::get('/cart', 'CartOrderController@index')->middleware('verified');
    Route::get('/cart/{article:id}', 'CartOrderController@show')->middleware('verified');
    Route::post('/cart', 'CartOrderController@store')->middleware('verified');
    Route::delete('/cart/{article:id}', 'CartOrderController@destroy');

    Route::resource('/articles', 'ArticlesController', ['except' => ['show']]);

    Route::get('/users', 'UsersController@index')->name('users');
    Route::get('/user/{user}', 'UsersController@show')->name('user');

    Route::get('/administration', 'ImportsController@index')->name('administration');
    Route::get('/administration/import', 'ImportsController@create')->name('import');

    Route::get('/orders', 'OrdersController@index');
    Route::get('/orders/{order}', 'OrdersController@show')->name('order');
    
    Route::get('/order/{order}/send', 'OrdersUploadController@index')->name('order.send');
    
    Route::get('/profiles/{user}/notifications', 'NotificationsController@index');
    Route::delete('/profiles/{user}/notifications/{notification}', 'NotificationsController@destroy');

    Route::patch('articles/{article}/activate', 'ArticlesActivationController@update');
});

Auth::routes(['verify' => true]);

Route::get('{page}', 'PagesController@show');
