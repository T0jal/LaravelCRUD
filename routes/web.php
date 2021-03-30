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

Route::get('/', function () {
    return redirect('/products');
});
Route::get('/products', 'ProductController@products');

Route::prefix('categories')->group(function(){
    Route::get('', 'CategoryController@index');
    Route::get('create', 'CategoryController@create');
    Route::post('', 'CategoryController@store');
    Route::get('{category}', 'CategoryController@show');
    Route::get('{category}/edit', 'CategoryController@edit');
    Route::put('{category}', 'CategoryController@update');
    Route::delete('{category}', 'CategoryController@destroy');
});

Route::prefix('products')->group(function(){
    Route::get('', 'ProductController@index');
    Route::get('create', 'ProductController@create');
    Route::post('', 'ProductController@store');
    Route::get('{product}', 'ProductController@show');
    Route::get('{product}/edit', 'ProductController@edit');
    Route::put('{product}', 'ProductController@update');
    Route::delete('{product}', 'ProductController@destroy');
});

Route::prefix('projects')->group(function(){
    Route::get('', 'ProjectController@index');
    Route::get('create', 'ProjectController@create');
    Route::post('', 'ProjectController@store');
    Route::get('{project}', 'ProjectController@show');
    Route::get('{project}/edit', 'ProjectController@edit');
    Route::put('{project}', 'ProjectController@update');
    Route::delete('{project}', 'ProjectController@destroy');
});
