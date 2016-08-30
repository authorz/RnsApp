<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/29
 * Time: 18:16
 */

Route::get('menu',[
    'uses'=>'Admin\PublicController@menu'
]);

Route::get('header',[
    'uses'=>'Admin\PublicController@header'
]);

Route::get('app',[
    'uses'=>'Admin\PublicController@app'
]);

Route::get('aside',[
    'uses'=>'Admin\PublicController@aside'
]);

Route::get('nav',[
    'uses'=>'Admin\PublicController@nav'
]);

Route::get('settings',[
    'uses'=>'Admin\PublicController@settings'
]);