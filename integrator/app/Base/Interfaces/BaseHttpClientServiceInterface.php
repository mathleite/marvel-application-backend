<?php


namespace App\Base\Interfaces;


interface BaseHttpClientServiceInterface
{
    /**
     * @param string $url
     * @param array  $options
     *
     * @return \stdClass
     */
    public static function getContentData(string $url, array $options = []): \stdClass;
}
