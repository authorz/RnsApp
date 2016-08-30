<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/29
 * Time: 10:42
 */
Route::group(['prefix'=>'rtmp'],function(){

    Route::get('publish_url',[
        'uses'=>'Api\RtmpController@publish_url'
    ]);

});