<?php


namespace App\Marvel\instances;


use App\Marvel\interfaces\MarvelEnvApiInterface;

class MarvelEnvApi implements MarvelEnvApiInterface
{
    /** @return array */
    public static function getRequestOptions(): array
    {
        return [
            'base_uri' => config('app.marvel_api_base_url'),
            'query'    => [
                'apikey' => config('app.marvel_api_key'),
                'hash'   => config('app.marvel_api_hash'),
                'ts'     => config('app.marvel_api_ts')
            ],
        ];
    }
}
