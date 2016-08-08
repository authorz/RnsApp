<?php namespace App\Http\Controllers\Admin;
/**
 * Login Controller
 * User: crazy
 * Date: 16/8/3
 * Time: 10:55
 */

use App\Http\Controllers\Controller;

class ModuleController extends Controller{

    public function index(){
        return view('admin/default/module');
    }


}