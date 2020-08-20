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

// Route::get('/dashboard', 'UsersController@index');

Route::get('/articles/{article}', 'ArticlesController@show');

Route::group(['prefix'=> 'tp-admin', 'namespace' => 'Admin',], function () {

    Route::get('/articles', 'ArticlesController@index');
    Route::get('/articles/create', 'ArticlesController@create');
    Route::get('/articles/{article}', 'ArticlesController@show');
    Route::post('/articles', 'ArticlesController@store');
    Route::delete('/articles/{article}', 'ArticlesController@destroy');

});

Auth::routes();
