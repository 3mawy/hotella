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
      /*  Blade::component('layouts.components._navBar','navBar');
        Blade::component('layouts.components._footer','footer');
        Blade::component('layouts.components._hotelCard','hotelCard');
        Blade::component('layouts.components._recommended','recommended');
        Blade::component('layouts.components._carousel.blade.php','carousel');
        Blade::component('layouts.components._sideBar','sideBar');*/
       /* $this->app->bind(
            RapidApiService::class,
            function ($app) {
                return new \App\Services\RapidApiServiceMock();
            }
        );*/
    }
}
