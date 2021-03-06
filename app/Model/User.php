<?php namespace App\Model;
/**
 * User Model
 * User: crazy
 * Date: 16/8/11
 * Time: 16:47
 */



use App\Libary\Contracts\Member\LoginAuth;
use App\Libary\Contracts\Member\LoginInterface;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements LoginInterface{

    use LoginAuth;

}