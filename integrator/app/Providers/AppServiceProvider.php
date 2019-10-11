<?php

namespace App\Providers;

use GuzzleHttp\Client;
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
        $this->app->singleton('GuzzleHttp\Client', function () {
            return new Client([
                'base_uri' => 'https://gateway.marvel.com/v1/public/',
                'query' => [
                    'apikey' => '6ad1545abd9cd65a8f1203f9b021da32',
                    'hash' => '1ce381de35ae921ab56fc4d79602fc5d',
                    'ts' => '1'
                ]
            ]);
        });
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
