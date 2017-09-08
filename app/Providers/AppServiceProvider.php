<?php

namespace App\Providers;

use App\Services\GiphyService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GiphyService::class, function ($app) {
            return new GiphyService();
        });
    }
}
