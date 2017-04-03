<?php 
namespace Monokakure\CSV;

use Illuminate\Support\ServiceProvider;

class CSVServiceProvider extends ServiceProvider
{
	public function register()
	{
        $this->app->singleton('csvfacade', function ($app) {
			return new \Monokakure\CSV\Factory;
		});
	}
}


