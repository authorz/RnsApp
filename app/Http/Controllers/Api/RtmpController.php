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

    use Qiniu\QiniuV2;

    /**
     * 推流
     *
     * return json
     */
    public function publish_url_v2(){

        self::_initialize();

        $url = self::publish_url('22312');

        return response()->json([
            'status'=>200,
            'return'=>[
                'url'=>$url,
            ],
        ]);


    }
}