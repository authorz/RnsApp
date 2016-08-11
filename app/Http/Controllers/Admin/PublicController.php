<?php namespace App\Http\Controllers\Admin;
/**
 * Login Controller
 * User: crazy
 * Date: 16/8/3
 * Time: 10:55
 */

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PublicController extends Controller{
    public function menu(){
        $module = Storage::directories('Http/Controllers/Module');

        foreach($module as $key=>$value){
            $contents = json_decode(Storage::get($value.'/config.php'),true);
            $module[$key] = $contents;
        }

        return response()->json($module);
    }

    public function header(){
        return view('admin/default/header');
    }

    public function app(){
        return view('admin/default/app');
    }

    public function aside(){
        return view('admin/default/aside');
    }

    public function nav(){
        return view('admin/default/menu');
    }

    public function settings(){
        return view('admin/default/settings');
    }
}