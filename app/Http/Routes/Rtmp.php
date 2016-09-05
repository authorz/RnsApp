<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/29
 * Time: 10:42
 */
Route::group(['prefix'=>'rtmp'],function(){

    Route::get('v1/publish_url',[
        'uses'=>'Api\RtmpController@publish_url'
    ]);

    Route::get('v2/publish_url',[
        'uses'=>'Api\RtmpController@publish_url_v2'
    ]);

});