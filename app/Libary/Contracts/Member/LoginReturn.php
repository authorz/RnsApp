<?php
namespace App\Libary\Contracts\Member;

use Illuminate\Support\Facades\Lang;

trait LoginReturn{
    public static function validatorUserName(){
        return ['state'=>-1,'content'=>Lang::get('prompt.prompt_1')];
    }

    public static function validatorPassword(){
        return ['state'=>-1,'content'=>Lang::get('prompt.prompt_2')];
    }

    public static function validatorCode(){
        return ['state'=>-1,'content'=>Lang::get('prompt.prompt_3')];
    }

    public static function issetUserName(){
        return ['state'=>-1,'content'=>Lang::get('prompt.prompt_5')];
    }

    public static function issetPassword(){
        return ['state'=>-1,'content'=>Lang::get('prompt.prompt_6')];
    }

    public static function issetCode(){
        return ['state'=>-1,'content'=>Lang::get('prompt.prompt_7')];
    }

    public static function login(){
        return ['state'=>1,'content'=>Lang::get('prompt.prompt_8')];
    }

    public static function error(){
        return ['state'=>-1,'content'=>Lang::get('prompt.prompt_4')];
    }

    public static function noParam(){
        return ['state'=>-1,'content'=>Lang::get('login.error')];
    }
}