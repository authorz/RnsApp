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

	Route::get('login',[
		'uses'=>'Admin\LoginController@index'
	]);

	Route::get('coder',[
		'uses'=>'Admin\LoginController@coder'
	]);

	Route::get('index',[
		'uses'=>'Admin\IndexController@index'
	]);

	Route::group(['prefix'=>'public'],function(){

//		Route::get('menu',[
//			'uses'=>'Admin\PublicController@menu'
//		]);

	});

	Route::group(['prefix'=>'module'],function(){
		Route::get('index',[
			'uses'=>'Admin\ModuleController@index'
		]);
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
