<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function($table)
		{

			$table->increments('id'); 							 		// 自增ID
			$table->string('username', 32); 					 		// 用户名
			$table->string('email',32)->nullable();              		// 邮箱
			$table->char('mobile',11)->default(0);               		// 手机号
			$table->string('password',64)->default('');          		// 密码
			$table->bigInteger('group')->default(0);             		// 所属组
			$table->bigInteger('avatar')->default(0);            		// 用户头像
			$table->enum('sex', array('-1', '0','1'))->default(0); 		// 性别
			$table->string('realname',15); 								// 真实姓名
			$table->string('idcard_no',18);                				// 身份证号码
			$table->integer('login');                      				// 登陆次数
			$table->integer('last_login_time');              			// 最后一次登陆时间
			$table->integer('ctime');                      				// 创建时间
			$table->integer('utime');                       			// 更新时间
			$table->tinyInteger('status');                  			// 状态 0=>正常 1=>禁用
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
