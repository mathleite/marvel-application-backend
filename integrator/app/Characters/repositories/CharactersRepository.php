<?php


namespace App\Characters\repositories;


use App\Characters\collections\CharactersCollection;
use App\Characters\models\CharacterModel;
use App\Response\services\ResponseService;
use Exception;
use Illuminate\Http\JsonResponse;

class CharactersRepository
{
    private $query;

    public function __construct()
    {
        $this->query = CharacterModel::query();
    }

    /**
     * @param string $userName
     *
     * @return CharactersCollection
     * @throws Exception
     */
    public function getByUserName(string $userName): CharactersCollection
    {
        try {
            $characters = $this->query->where('user_name', 'ilike', "%{$userName}%");

            return (new CharactersCollection($characters->get()));
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @param array $characters
     *
     * @return JsonResponse
     * @throws Exception
     */
    public function saveCharacters(array $characters): JsonResponse
    {
        try {
            self::saveEachCharacter($characters);

            return ResponseService::getResponseMessage('Characters successfully saved!', 201);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage(), $exception->getCode());
        }
    }

    /** @param array $characters */
    private static function saveEachCharacter(array $characters): void
    {
        foreach ($characters as $character) {
            $characterModel = new CharacterModel();
            $characterModel->fill($character);
            $characterModel->save();
        }
    }
}
