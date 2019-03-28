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

Route::get('/',[
    'as'        => 'trang-chu',
    'uses'      => 'PageController@getIndex'
]);

Route::get('category/{id}',[
    'as'        => 'category',
    'uses'      => 'PageController@getCategory'
]);


Route::get('login','Auth\LoginController@getLogin');
Route::post('login','Auth\LoginController@postLogin');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
