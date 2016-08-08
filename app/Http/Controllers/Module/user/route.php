<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/4
 * Time: 15:20
 */


Route::group(['prefix' => 'user'], function () {
    Route::get('index', [
        'uses' => 'Module\user\controller\IndexController@index'
    ]);
});
