<?php namespace App\Http\Controllers\Module\user\controller;

//use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Module\user\http;

class IndexController extends http{

    public function index(){
        return view('index');
    }
}