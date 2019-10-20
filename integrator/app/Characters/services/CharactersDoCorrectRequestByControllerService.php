<?php


namespace App\Characters\services;


use App\GuzzleHttpClient\Service\GuzzleHttpClientService;

class CharactersDoCorrectRequestByControllerService
{
    private const CHARACTERS_ROUTE = 'characters';

    /** @return \stdClass */
    public static function getAllCharacters(): \stdClass
    {
        return self::getContentData(self::CHARACTERS_ROUTE);
    }

    /**
     * @param string $route
     *
     * @return \stdClass
     */
    private static function getContentData(string $route): \stdClass
    {
        return (new GuzzleHttpClientService())::getContentData($route);
    }
}
