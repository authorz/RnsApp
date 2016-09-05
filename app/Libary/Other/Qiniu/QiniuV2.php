<?php
namespace App\Libary\Other\Qiniu;
/**
 * 七牛直播公共文件
 * User: crazy
 * Date: 16/8/25
 * Time: 16:42
 */

use Qiniu\Pili;


trait QiniuV2{
    use Config;

    protected static $config = [];

    protected static $mac;

    protected static $client;

    protected static $core;

    public static function _initialize(){
        self::$config = self::getConfig();

        self::$mac = self::mac();

        self::$client = self::client();

        self::$core  = self::hub();
    }

    public static function client(){
        return new Pili\Client(self::$mac);
    }

    public static function mac(){
        return new Pili\Mac(self::$config['accessKey'],self::$config['secretKey']);
    }

    public static function hub(){
        return self::$client->hub(self::$config['hubName']);
    }

    public static function publish_url($streamKey = ''){
        return Pili\RTMPPublishURL("pili-publish.remp.canka168.com", self::$config['hubName'], $streamKey , 3600, self::$config['accessKey'], self::$config['secretKey']);
    }



}