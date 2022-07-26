<?php

namespace App\Providers;

use App\Repository\Functions;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('layouts.main', function($view) {

            $configs = Functions::getConfigs();

            $view->with(array(
                'config' => $configs
            ));
        });
    }
}
