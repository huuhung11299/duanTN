<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
   
    public function boot()
    {
      Schema::defaultStringLength(191);
    //     var_dump(base_path().'/public');
    // exit;
		// $this->app->bind('path.public', function() {
		// 	return base_path() . '/public';
		// });
    }
}
