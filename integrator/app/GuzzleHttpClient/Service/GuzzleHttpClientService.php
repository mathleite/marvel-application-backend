<?php

namespace App\GuzzleHttpClient\Service;

use App\Base\Interfaces\BaseHttpClientServiceInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

class GuzzleHttpClientService implements BaseHttpClientServiceInterface
{
    private const HTTP_METHOD_GET = 'GET';

    /**
     * @param string $url
     * @param array  $options
     *
     * @return \stdClass
     */
    public static function getContentData(string $url, array $options = []): \stdClass
    {
        try {
            $response = self::createGuzzleHttpClient()
                            ->request(self::HTTP_METHOD_GET, $url, $options);

            return self::getResponseContent($response);
        } catch (GuzzleException $e) {
            throw new RequestException($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param ResponseInterface $response
     *
     * @return \stdClass
     */
    private static function getResponseContent(ResponseInterface $response): \stdClass
    {
        return json_decode($response->getBody()->getContents());
    }

    /**
     * @return Client
     */
    private static function createGuzzleHttpClient(): Client
    {
        return new Client(self::getRequestOptions());
    }

    /**
     * @return array
     */
    private static function getRequestOptions(): array
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
