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

Route::post('/show-recommend/{name}', 'RecommendController@show');
Route::post('/add-recommend/{name}', 'AddController@add');
Route::get('/edit/{name}', 'EditController@index');
Route::post('/real-edit/{name}', 'EditController@edit');
Route::post('real-delete/{name}', 'EditController@delete');
Route::get('/add/{name}', 'AddController@index');
Route::get('/add-item', 'AddController@preaddnewitem');
Route::post('/real-add-item', 'AddController@addnewitem');
Route::redirect('/', '/index');
Route::get('/index', 'IndexController@index');
Route::post('/search-id', 'SearchController@byID');
Route::post('/search-name', 'SearchController@byName');
Route::post('/search-effect', 'SearchController@byEffect');
