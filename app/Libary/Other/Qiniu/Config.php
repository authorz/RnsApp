<?php
namespace App\Libary\Other\Qiniu;

/**
 * 七牛直播配置文件
 * User: crazy
 * Date: 16/8/25
 * Time: 16:42
 */

trait Config{
    public static $accessKey = "x_pSOmz6ItDSvPCpCcMmEhniyGD_5ZG3D-e7iAOx";

    public static $secretKey = "tdVVewuANdxAjcJrlnvSbZ-qX9bQTKBlKJ9U7N7s";

    public static $hubName   = "cater";

    public static function getConfig($accessKey=null,$secretKey=null,$hubName=null){
        return [
                    'accessKey'=>$accessKey == null ? self::$accessKey : $accessKey,
                    'secretKey'=>$secretKey == null ? self::$secretKey : $secretKey,
                    'hubName'  =>$hubName   == null ? self::$hubName   : $hubName,
        ];
    }

}
