<?php

namespace App\Response\interfaces;


use Illuminate\Http\JsonResponse;

interface ResponseServiceInterface
{
    /**
     * @param array $data
     * @param int   $statusCode
     *
     * @return JsonResponse
     */
    public static function getResponseData(array $data, int $statusCode): JsonResponse;

    /**
     * @param string $message
     * @param int    $statusCode
     *
     * @return JsonResponse
     */
    public static function getResponseMessage(string $message, int $statusCode): JsonResponse;
}
