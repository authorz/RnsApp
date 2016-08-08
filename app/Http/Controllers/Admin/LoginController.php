<?php namespace App\Http\Controllers\Admin;
/**
 * Login Controller
 * User: crazy
 * Date: 16/8/3
 * Time: 10:55
 */

use App\Http\Controllers\Controller;
use App\Libary\Contracts\Secoder\SecoderInterface;
use Illuminate\Support\Facades\Lang as lang;



class LoginController extends Controller{

    public function index(){

        return view('/admin/default/login');

    }

    public function coder(SecoderInterface $secoder){

        return response($secoder->entry())->header('Content-type','image/png');
    }
}