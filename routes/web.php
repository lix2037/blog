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

Route::get('/', function () {
    return view('welcome');
});

//后端入口
Route::any('admin/login','Admin\LoginController@index');

Route::any('admin/test','Admin\LoginController@test');//测试
//Route::any('admin/register','Admin\LoginController@register');//测试
Route::get('admin',function (){
   return redirect('admin/index');
});
//验证码
Route::any('admin/code','Admin\LoginController@code');

Route::group(['namespace'=>'Admin','middleware'=>'admin.login','prefix'=>'admin'],function (){

    Route::get('index','IndexController@index');
    Route::get('info','IndexController@info');

});

