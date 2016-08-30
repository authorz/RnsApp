<?php namespace App\Http\Controllers\Api;

/**
 * 七牛直播
 * User: crazy
 * Date: 16/8/25
 * Time: 16:42
 */
use App\Http\Controllers\Controller;

use App\Libary\Other\Qiniu;




class RtmpController extends Controller{

    use Qiniu\Qiniu;

    public function publish_url(){

        self::_initialize();

        return self::$client->getStream('z1.cater.22312')->toJSONString();

    }
}