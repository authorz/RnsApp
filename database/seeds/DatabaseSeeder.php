<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		//$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder{

	public function run()
	{
		DB::table('user')->delete();

		\App\Model\Contracts\User::create(
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

