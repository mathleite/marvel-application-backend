<?php


namespace App\Base\Interfaces;


use Illuminate\Http\JsonResponse;

interface BaseHttpClientServiceInterface
{
    /**
     * @param string $httpMethod
     * @param string $url
     * @param array  $options
     *
     * @return JsonResponse
     */
    public function getContentData(string $httpMethod, string $url, array $options = []): JsonResponse;
}
