<?php

namespace App\Characters\controllers;

use App\Characters\resources\CharactersResource;
use App\Characters\services\CharactersService;
use App\Http\Controllers\Controller;

class CharactersController extends Controller
{
    /** Get all Marvel Characters*/
    public function getAll(): CharactersResource
    {
        return (new CharactersResource(
            (new CharactersService())::getAllCharacters())
        );
    }
}
