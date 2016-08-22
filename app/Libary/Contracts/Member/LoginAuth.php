<?php
namespace App\Libary\Contracts\Member;
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/11
 * Time: 17:12
 */


use App\Model\Contracts\User;
use Illuminate\Support\Facades\Session;
use App\Libary\Contracts\Member\LoginReturn;



trait LoginAuth{

    use LoginReturn;

    public static $param;

    public static function getUserPassword($username = null,$password = null){
        return User::getOneUserPass($username,$password);
    }

    public static function getUserUsername($username = null){
        return User::getOneUserIsset($username);
    }

    public static function validateCode($code = null){
        if(Session::get('code') != $code){
            return true;
        }
    }

    public static function userLoginAuth($data = null){

        self::$param = $data;

        if(isset(self::$param)){

            switch($data){

                case self::$param['username'] == null:
                    return LoginReturn::validatorUserName();
                    break;

                case self::$param['password'] == null:
                    return LoginReturn::validatorPassword();
                    break;

                case self::$param['code'] == null:
                    return LoginReturn::validatorCode();
                    break;

                default:

                    if(self::getUserUsername(trim(self::$param['username'])) == 0){

                        return LoginReturn::issetUserName();

                    }else if(self::getUserPassword(self::$param['username'],self::passEncrypt(self::$param['password'])) == 0){

                        return LoginReturn::issetPassword();

                    }else if(self::validateCode(self::$param['code'])){

                        return LoginReturn::issetCode();

                    }else{
                        Session::put('username',self::$param['username']);
                        return LoginReturn::login();

                    }

                break;

            }

        }else{

            return LoginReturn::error();

        }
    }

    public static function passEncrypt($password = null){
        return md5(crypt($password,substr($password,0,2)));
    }
}