<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

//pjax请求局部刷新页面
Route::group(['prefix' => 'admin', 'middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('admin/index');
    });
    Route::get('table', function () {
        return view('admin/table');
    });
    Route::get('jqgrid', function () {
        return view('admin/jqgrid');
    });

    //商品管理模块
    Route::get('goods/lst', 'GoodsController@index');

    //角色权限路由
    Route::resource('roles', 'RolesController');
    Route::resource('permissions', 'PermissionsController');
    Route::resource('admins', 'AdminsController');


    //管理员登录路由
    Route::get('login', 'AdminsController@login');
    Route::post('login', 'AdminsController@signin');

});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin/index');
    });
    Route::get('table', function () {
        return view('admin/table');
    });
    Route::get('jqgrid', function () {
        return view('admin/jqgrid');
    });

    Route::get('goods/lst', 'GoodsController@index');

    Route::resource('roles', 'RolesController');
    Route::resource('permissions', 'PermissionsController');
    Route::resource('admins', 'AdminsController');
});

Route::resource('Goods', 'GoodsController');



//首页ajax滚动加载测试
Route::get('ajax', 'LoginController@ajax');
Route::get('ajaxGet', 'LoginController@ajaxGet');
//购物车
Route::get('cart', 'CartController@index');
Route::get('cart/store', 'CartController@store');

/*Route::group(['middleware' => ['web','user.login']], function(){*/

    //前台的登录
    Route::any('ulogin', 'LoginController@login');
//前台首页
    Route::any('index', 'LoginController@index');
//前台注册页
    Route::any('reg', 'LoginController@reg');
//前台注册

    Route::any('register', 'LoginController@register');

    Route::any('register', 'LoginController@register');
//个人中心
    Route::any('order', 'OrderController@order');
//修改个人资料
    Route::any('newinfo', 'OrderController@newinfo');
//密码找回
    Route::any('passshow', 'LostPassController@show');
    Route::any('passget', 'LostPassController@getpass');
//密码重设
    Route::any('passsetshow', 'LostPassController@setpassshow');
    Route::any('passset', 'LostPassController@setpass');
    Route::any('newpass', 'LostPassController@newpass');

/*});*/


//会员管理
Route::group(['prefix' => 'admin'], function () {

    Route::resource('userinfo', 'UserController');


});







    //管理员登录路由
    Route::get('login', 'AdminsController@login');
    Route::post('login', 'AdminsController@signin');
//});

