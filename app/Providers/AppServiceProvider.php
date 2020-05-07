<?php

namespace App\Providers;

use App\Services\RapidApiService;
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
        $this->app->bind(
            RapidApiService::class,
            function ($app) {
                return new \App\Services\RapidApiServiceMock();
            }
        );
    }
}
