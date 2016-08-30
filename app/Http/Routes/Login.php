<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/25
 * Time: 16:44
 */

Route::group(['prefix'=>'login'],function(){

    Route::get('menu',[
        'uses'=>'Admin\PublicController@menu'
    ]);

});