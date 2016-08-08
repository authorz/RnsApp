<?php namespace App\Http\Controllers\Module\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
/**
    这是一个继承了Controller 的方法,你可以对Controller进行扩展或者做些程序启动时要做的事情

 */

class http extends Controller{

    public function __construct()
    {
        View::addLocation(realpath(base_path('app/Http/Controllers/Module/user/view')));
    }

}