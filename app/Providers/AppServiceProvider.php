<?php

namespace App\Providers;

use App\Doctor;
use App\Patient;

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
        view()->composer('*',function($view){
            $view->with('arrayname', Doctor::all());

       
        });
        view()->composer('*', function($view){
            $view->with('arrayname2', Patient::all());
        });
    }
}
