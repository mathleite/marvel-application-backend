<?php

namespace App\GuzzleHttpClient\Service;

use App\Base\Interfaces\BaseHttpClientServiceInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;

class GuzzleHttpClientService implements BaseHttpClientServiceInterface
{
    protected $httpClient;

    /**
     * GuzzleHttpRequest constructor.
     *
     * @param Client $httpClient
     */
    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param string $httpMethod
     * @param string $url
     * @param array  $options
     *
     * @return JsonResponse
     */
    public function getContentData(string $httpMethod, string $url, array $options = []): JsonResponse
    {
        try {
            $response = $this->httpClient->request($httpMethod, $url, $options);

            return self::getResponseContent($response);
        } catch (GuzzleException $e) {
            throw new RequestException($e->getMessage(), $e->getRequest());
        }
    }

    /**
     * @param $response
     *
     * @return JsonResponse
     * @todo add type to $response
     */
    private static function getResponseContent($response): JsonResponse
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}
