<?php

namespace App\Marvel\services;

use App\Characters\instances\Characters;
use App\Marvel\interfaces\MarvelServiceInterface;
use App\Marvel\instances\MarvelClientInstance;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

class MarvelService implements MarvelServiceInterface
{
    /**
     * @param string $url
     * @param array  $options
     *
     * @return Characters
     */
    public static function getCharacters(string $url, array $options = []): Characters
    {
        try {
            $response = (new MarvelClientInstance())::createClient()
                                                    ->get($url, $options);

            return self::getCharactersInstance($response);
        } catch (GuzzleException $e) {
            throw new RequestException($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param ResponseInterface $response
     *
     * @return Characters
     */
    private static function getCharactersInstance(ResponseInterface $response): Characters
    {
        return (new Characters($response));
    }
}
