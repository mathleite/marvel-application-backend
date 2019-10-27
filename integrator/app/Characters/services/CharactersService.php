<?php


namespace App\Characters\services;


use App\Characters\instances\Characters;
use App\Marvel\services\MarvelService;


class CharactersService
{
    private const CHARACTERS_ROUTE = 'characters';

    /** @return Characters */
    public static function getAllCharacters(): Characters
    {
        return self::getContentData(self::CHARACTERS_ROUTE);
    }

    /**
     * @param string $route
     *
     * @return Characters
     */
    private static function getContentData(string $route): Characters
    {
        return (new MarvelService())::getCharacters($route);
    }
}
