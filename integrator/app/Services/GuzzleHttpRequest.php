<?php

namespace App\Services;

use GuzzleHttp\Client;

class GuzzleHttpRequest
{
    protected $httpClient;

    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    protected function get($url)
    {
        $response = $this->httpClient->request('GET', $url);
        $contents = json_decode($response->getBody()->getContents());

        return $contents->data->results;
    }
}