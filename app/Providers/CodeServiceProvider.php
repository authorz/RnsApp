<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Libary\Secoder;


class CodeServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->bind('App\Libary\Contracts\Secoder\SecoderInterface','App\Libary\Secoder');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
