<?php


namespace App\Characters\services;


use App\Characters\instances\Characters;
use App\Characters\repositories\CharactersRepository;
use App\Characters\requests\GetCharactersByUserNameRequest;
use App\Characters\requests\SaveCharactersRequest;
use App\Marvel\services\MarvelService;
use App\Response\services\ResponseService;
use Exception;
use Illuminate\Http\JsonResponse;


class CharactersService
{
    private const CHARACTERS = 'characters';

    /** @return Characters */
    public static function getAllCharacters(): Characters
    {
        return self::getContentData(self::CHARACTERS);
    }

    /**
     * @param string $route
     *
     * @return Characters
     */
    private static function getContentData(string $route): Characters
    {
        return MarvelService::getCharacters($route);
    }

    /**
     * @param array $characters
     *
     * @return JsonResponse
     */
    public static function saveCharacters(array $characters): JsonResponse
    {
        try {
            return (new CharactersRepository())->saveCharacters($characters);
        } catch (Exception $exception) {
            return ResponseService::getResponseMessage($exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @param string $userName
     *
     * @return JsonResponse
     * @throws Exception
     */
    public static function getCharactersByUserName(string $userName): JsonResponse
    {
        $characters = (new CharactersRepository())->getByUserName($userName);

        return ResponseService::getResponseData($characters->getToArray(), 200);
    }
}
