<?php namespace App\Http\Controllers\Admin;
/**
 * Login Controller
 * User: crazy
 * Date: 16/8/3
 * Time: 10:55
 */

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller{

    public function __construct()
    {
        if(Session::has('username') == false){
            echo "<script>location.href='/admin/login'</script>";
        }
    }
}