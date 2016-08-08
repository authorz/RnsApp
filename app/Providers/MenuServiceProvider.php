<?php namespace App\Providers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		
		view()->share('menu', $this->module());
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

	/**
		获取模块数量
	 */
	public function module(){
		$module = Storage::directories('Http/Controllers/Module');

		foreach($module as $key=>$value){
			$contents = json_decode(Storage::get($value.'/config.php'),true);
			$module[$key] = $contents;
		}

		return $module;
	}

}
