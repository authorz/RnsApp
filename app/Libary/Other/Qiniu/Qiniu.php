<?php
namespace App\Libary\Other\Qiniu;
/**
 * 七牛直播公共文件
 * User: crazy
 * Date: 16/8/25
 * Time: 16:42
 */

use Qiniu\Credentials;
use Pili\Hub;

trait Qiniu{
    use Config;

    protected static $config = [];

    protected static $mac;

    protected static $client;

    protected static $core;

    public static function _initialize(){
        self::$config = self::getConfig();

        self::$mac = self::mac();

        self::$client = self::client();

    }

    public static function client(){
        return new Hub(self::$mac,self::$config['hubName']);
    }

    public static function mac(){
        return new Credentials(self::$config['accessKey'],self::$config['secretKey']);
    }



}