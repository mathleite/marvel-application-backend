<?php

namespace App\Characters\controllers;

use App\Characters\collections\CharactersCollection;
use App\Characters\requests\GetCharactersByUserNameRequest;
use App\Characters\requests\SaveCharactersRequest;
use App\Characters\resources\CharactersResource;
use App\Characters\services\CharactersService;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\JsonResponse;

class CharactersController extends Controller
{
    /** Get all Marvel Characters*/
    public static function getAll(): CharactersResource
    {
        return (new CharactersResource(CharactersService::getAllCharacters()));
    }

    /**
     * @param SaveCharactersRequest $request
     *
     * @return JsonResponse
     */
    public static function saveCharacters(SaveCharactersRequest $request): JsonResponse
    {
        $characters = $request->get('characters');

        return CharactersService::saveCharacters($characters);
    }

    /**
     * @param GetCharactersByUserNameRequest $request
     *
     * @return JsonResponse
     * @throws Exception
     */
    public static function getCharactersByUserName(GetCharactersByUserNameRequest $request): JsonResponse
    {
        $userName = $request->get('user_name');

        return CharactersService::getCharactersByUserName($userName);
    }
}
