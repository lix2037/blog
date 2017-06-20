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
//    return view('index');
    return view('job');
});
//Route::get('/','IndexController@index');
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
    Route::get('logout','LoginController@logout');
    Route::any('pass','IndexController@pass');

    //节点
    Route::post('node/changeOrder','NodeController@changeOrder');
    Route::resource('node','NodeController');


    //文章分类资源路由
    Route::post('category/changeOrder','CategoryController@changeOrder');
    Route::resource('category','CategoryController');

    //文章内容资源路由
    Route::resource('article','ArticleController');


});

//查看文章
Route::get('article/{article_id}','ArticleController@index');