<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/3
 * Time: 15:04
 */
namespace App\Libary\Contracts\Secoder;

interface SecoderInterface{
     public static function entry();
     public static function check($code);
}