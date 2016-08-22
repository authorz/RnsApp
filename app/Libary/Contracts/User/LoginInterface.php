<?php namespace App\Libary\Contracts\LoginInterface;
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/11
 * Time: 17:01
 */


interface Login{
    // 获取用户密码
    public static function getUserPassword();

    // 获取用户名
    public static function getUserUsername();

    // 验证验证码
    public static function validateCode();

    // 登陆认证
    public static function userLoginAuth();
}