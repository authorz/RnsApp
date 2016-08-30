<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/29
 * Time: 10:42
 */
Route::group(['prefix'=>'remp'],function(){

    Route::get('mkdir_house',[
        'uses'=>'Api\RempController@mkdir_house'
    ]);

});