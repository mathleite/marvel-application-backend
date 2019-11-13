<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['api'])->group(function () {
    Route::prefix('characters')->group(function () {
        $charactersController = '\App\Characters\controllers\CharactersController';

        Route::get('get-all', $charactersController . '@getAll');
        Route::post('save-characters', $charactersController . '@saveCharacters');
        Route::get('get-characters', $charactersController . '@getCharactersByUserName');
    });
});
