<?php namespace App\Http\Controllers\Admin;
/**
 * Login Controller
 * User: crazy
 * Date: 16/8/3
 * Time: 10:55
 */

use App\Http\Controllers\Admin\AdminController;

class IndexController extends AdminController{

    public function index(){
        return view('/admin/default/index');
    }

    public function dashboard(){
        return view('/admin/default/dashboard');
    }

}