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
                'base_uri' => getenv('MARVEL_API_BASE_URI'),
                'query' => [
                    'apikey' => getenv('MARVEL_API_KEY'),
                    'hash' => getenv('MARVEL_API_HASH'),
                    'ts' => getenv('MARVEL_API_TS')
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
