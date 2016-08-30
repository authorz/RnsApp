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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['prefix'=>'admin'],function()
{

	Route::get('dashboard',[
		'uses'=>'Admin\IndexController@dashboard'
	]);

	Route::get('login',[
		'as'=>'login',
		'uses'=>'Admin\LoginController@index'
	]);

	Route::get('lock',[
		'uses'=>'Admin\LoginController@lock'
	]);

	Route::get('coder',[
		'uses'=>'Admin\LoginController@coder'
	]);

	Route::get('index',[
		'uses'=>'Admin\IndexController@index'
	]);

	Route::group(['prefix'=>'public'],function(){
		include_once 'Routes/Admin/Public.php';
	});


	Route::group(['prefix'=>'group'],function(){
		Route::get('user/index',[
			'uses'=>'Admin\UserController@user_index',
		]);


	});



	Route::group(['prefix'=>'system'],function(){

		Route::get('system_config',[
			'uses'=>'Admin\SystemController@system_config'
		]);

		Route::get('system_set',[
			'uses'=>'Admin\SystemController@system_set'
		]);

		Route::get('system_menu',[
			'uses'=>'Admin\MenuController@system_menu'
		]);

		Route::get('get_left_menu',[
			'uses'=>'Admin\MenuController@get_left_menu'
		]);

		Route::get('get_system_menu',[
			'uses'=>'Admin\MenuController@get_system_menu'
		]);

		Route::get('add_menu',[
			'uses'=>'Admin\MenuController@add_menu'
		]);

		Route::post('get_menu_content',[
			'uses'=>'Admin\MenuController@get_menu_content'
		]);

		Route::post('_add_menu',[
			'uses'=>'Admin\MenuController@_add_menu'
		]);

		Route::post('_update_menu',[
			'uses'=>'Admin\MenuController@_update_menu'
		]);

		Route::post('_del_menu',[
			'uses'=>'Admin\MenuController@_del_menu'
		]);

		Route::post('_disable_menu',[
			'uses'=>'Admin\MenuController@_disable_menu'
		]);

		Route::post('_enable_menu',[
			'uses'=>'Admin\MenuController@_enable_menu'
		]);
	});


	Route::group(['prefix'=>'module'],function(){
		Route::get('index',[
			'uses'=>'Admin\ModuleController@index'
		]);
	});


	Route::group(['prefix'=>'operate'],function(){
		Route::post('is_login',[
			'uses'=>'Admin\LoginController@is_login'
		]);
	});

	Route::get('docs',function(){
		return view('admin/default/template/doc');
	});


});

// 后台模块路由
Route::group(['prefix'=>'admin'],function() {
	Route::group(['prefix' => 'extension'], function () {
		include_once 'ModuleRoutes.php';
	});
});

// 接口路由
Route::group(['prefix'=>'api'],function() {
		include_once 'ApiRoutes.php';
});
