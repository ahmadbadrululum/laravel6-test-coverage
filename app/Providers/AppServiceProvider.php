<?php

namespace App\Providers;

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
        $this->app->bind(
            'App\Interfaces\AnnualLeaveInterface',
            'App\Repositories\UserRepository'
        );

        $this->app->bind(
            'App\Interfaces\AnnualLeaveInterface',
            'App\Repositories\AnnualLeaveRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
