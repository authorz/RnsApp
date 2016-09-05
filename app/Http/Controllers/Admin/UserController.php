<?php namespace App\Http\Controllers\Admin;
/**
 * Group 管理员管理
 * User: crazy
 * Date: 16/8/25
 * Time: 16:07
 */
use App\Http\Controllers\Controller;

class UserController extends Controller{

    protected static $templatePath = '/admin/default/system/user/';

    // 管理员列表页
    public function user_index(){
        return view(self::$templatePath.'index');
    }
}