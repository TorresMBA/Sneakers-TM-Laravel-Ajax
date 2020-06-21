<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
//use Illuminate\Contracts\View\View;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::share('theme', 'sneakers');
        view()->share('theme', 'sneakers');
        view()->share('panel', 'dashboard');
    }
}
