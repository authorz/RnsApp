<?php namespace App\Libary\Contracts\Member;
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/11
 * Time: 17:01
 */


interface LoginInterface{
    // 获取用户密码
    public static function getUserPassword();

    // 获取用户名
    public static function getUserUsername();

    // 验证验证码
    public static function validateCode();

    // 登陆认证
    public static function userLoginAuth();

    // 密码解密
    public static function passEncrypt();
}