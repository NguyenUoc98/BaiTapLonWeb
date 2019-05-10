<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


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
//route cho dang nhap va dang ky rieng
Route::get('dang-nhap','PageController@getDangNhap');
Route::post('dang-nhap',[
    'as'=>'dang-nhap',
    'uses'=>'PageController@postLogin'
]);
Route::get('dang-ky','PageController@getDangKy');
Route::post('dang-ky',[
    'as'=>'dang-ky',
    'uses'=>'PageController@postRegister'
]);

//route comment
Route::post('house-detail\{{id}}',[
    'as'=>'house-detail\{{id}}',
    'uses'=>'PageController@postComment'
]);
//route cho thong tin ca nhan
Route::get('infor','PageController@getInfor');

Route::post('infor',[
    'as'=>'infor',
    'uses'=>'PageController@updateUser'
]);

//route cho comment
// <<<<<<< HEAD
Route::post('comment/id', 'CommentController@postComment');

//route cho tim kiem
Route::post('timkiem',[
    'as'    =>'timkiem',
    'uses'   =>'PageController@postTimKiem'
]);

Route::post('comment/{id}', 'CommentController@postComment');

Route::get('getComment',[
    'as'    =>'getComment',
    'use'   =>'CommentController@getComment'
]);

<<<<<<< HEAD
Route::get('tintuc/{id}',[
    'as'        =>'tintuc',
    'uses'      =>'PageController@getTinTucDetail'
]);
=======

>>>>>>> 88d2036f2fbd67480d1ad6093db584724a249321
