<?php namespace App\Http\Controllers\Admin;
/**
 * Login Controller
 * User: crazy
 * Date: 16/8/3
 * Time: 10:55
 */

use App\Http\Controllers\Controller;
use App\Libary\Contracts\Member\LoginReturn;
use App\Libary\Contracts\Secoder\SecoderInterface;
use Illuminate\Http\Request;
use App\Model\Login;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;


class LoginController extends Controller{

    use LoginReturn;

    public function index(){

        
        return view('/admin/default/login');
    }

    public function is_login(Request $request){

        if($request->ajax()){
            return response()->json(Login::userLoginAuth($request->input()));
        }else{
            return response()->json(LoginReturn::noParam());
        }
    }

    public function coder(SecoderInterface $secoder){
        return response($secoder->entry())->header('Content-type','image/png');
    }

    public function lock(){
        return view('/admin/default/lock');
    }
}