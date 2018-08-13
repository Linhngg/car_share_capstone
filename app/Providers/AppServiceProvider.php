<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if (env('APP_ENV') == 'production' || env('APP_ENV') == 'prod') {
            $this->app['url']->forceScheme('https');
        }
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        if (env('APP_ENV') === 'production' || env('APP_ENV') === 'prod') {
//            $this->app['url']->forceScheme('https');
//        }
//        $this->app['url']->forceScheme('https');
    }
}