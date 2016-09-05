<?php namespace App\Model\Contracts;
/**
 * User Model
 * User: crazy
 * Date: 16/8/11
 * Time: 16:47
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model{

    protected $table = 'user';


    protected $fillable = ['username','email','mobile','password','group','sex','realname','idcard_no','ctime','status'];


    protected $hidden = [];


    public static function getOneUserIsset($username){
        return DB::table('user')->where('username',$username)->count();
    }

    public static function getOneUserPass($username,$password){
        return DB::table('user')->where('username',$username)
                                ->where('password',$password)
                                ->count();
    }
}