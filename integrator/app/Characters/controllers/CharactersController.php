<?php

namespace App\Characters\controllers;

use App\Characters\resources\CharactersResource;
use App\Characters\services\CharactersDoCorrectRequestByControllerService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    /**
     * Get all Marvel Characters
     *
     */
    public function getAll(): CharactersResource
    {
        return (new CharactersResource(
            (new CharactersDoCorrectRequestByControllerService())::getAllCharacters())
        );
    }
}
