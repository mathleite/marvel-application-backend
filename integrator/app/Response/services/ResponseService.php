<?php


namespace App\Response\services;


use App\Response\interfaces\ResponseServiceInterface;
use Illuminate\Http\JsonResponse;

/**
 * Class ResponseService
 *
 * @package App\Response\services
 */
class ResponseService implements ResponseServiceInterface
{
    /**
     * @param array $data
     * @param int   $statusCode
     *
     * @return JsonResponse
     */
    public static function getResponseData(array $data, int $statusCode): JsonResponse
    {
        return response()->json([
            'data'        => $data,
            'status_code' => $statusCode,
        ], $statusCode);
    }

    /**
     * @param string $message
     * @param int    $statusCode
     *
     * @return JsonResponse
     */
    public static function getResponseMessage(string $message, int $statusCode): JsonResponse
    {
        return response()->json([
            'message'     => $message,
            'status_code' => $statusCode,
        ], $statusCode);
    }
}
