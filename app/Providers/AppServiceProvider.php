<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$baseUrl = 'https://www.mercadobitcoin.net/api/';

        //$this->app->singleton('GuzzleHttp\Client', function($api) use ($baseUrl) {
        //    return new Client([
        //        'base_uri' => $baseUrl,
        //        'headers' => [
        //            'content-type' => 'application/json',
        //            'Accept' => 'application/json',
        //            //'Authorization' => 'Bearer '.$access_token,
        //        ],
        //    ]);
        //});

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
    }
}
