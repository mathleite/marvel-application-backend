<?php


namespace App\Marvel\instances;


use App\Marvel\instances\MarvelEnvApi;
use App\Marvel\interfaces\MarvelApiServiceInterface;
use GuzzleHttp\Client;

class MarvelClientInstance implements MarvelApiServiceInterface
{
    /** @return Client */
    public static function createClient(): Client
    {
        return new Client((new MarvelEnvApi())::getRequestOptions());
    }
}
