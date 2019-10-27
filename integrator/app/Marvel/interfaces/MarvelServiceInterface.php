<?php


namespace App\Marvel\interfaces;


use App\Characters\instances\Characters;

interface MarvelServiceInterface
{
    /**
     * @param string $url
     * @param array  $options
     *
     * @return Characters
     */
    public static function getCharacters(string $url, array $options = []): Characters;
}
