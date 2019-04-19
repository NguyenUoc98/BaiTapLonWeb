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



Route::post('login',[
    'as'=>'login',
    'uses'=>'PageController@postLogin'
]);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('logout','PageController@getLogout');


Route::post('register',[
    'as'=>'register',
    'uses'=>'PageController@postRegister'
]);

Route::get('house-detail/{id}',[
    'as'        =>'house-detail',
    'uses'      =>'PageController@getHouseDetail'
]);

Route::get('add-house',[
    'as'        =>'add-house',
    'uses'      =>'PageController@getAddHouse'
]);

Route::get('/admin/ajax/get-district',[
    'as'        =>'/admin/ajax/get-district',
    'uses'      =>'AjaxController@getDistrictByCity'
]);

Route::get('/admin/ajax/get-town',[
    'as'        =>'/admin/ajax/get-town',
    'uses'      =>'AjaxController@getTownByDistrict'
]);