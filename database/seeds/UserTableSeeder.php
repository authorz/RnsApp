<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/22
 * Time: 10:55
 */

class UserTableSeeder extends Seeder{

    public function run()
    {
        DB::table('user')->delete();

        User::create(
            [
                'username'=>'admin',
                'email'=>'admin@admin.com',
                'mobile'=>'18510362698',
                'password'=>'a6ec5a7b854d204b74cd90a8306a957e',
                'group'=>0,
                'sex'=>1,
                'realname'=>'crazy',
                'idcard_no'=>'110110110110110110',
                'ctime'=>time(),
                'status'=>0
            ]
        );
    }
}