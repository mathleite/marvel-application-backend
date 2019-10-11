<?php

namespace App\Services\MarvelApi;

use App\Services\GuzzleHttpRequest;

class Characters extends GuzzleHttpRequest
{
    public function all()
    {
        return $this->get('characters');
    }

    public function find($characterId)
    {
        return $this->get("characters/{$characterId}");
    }

    public function findComics($characterId)
    {
        return $this->get("characters/{$characterId}/comics");
    }

    public function findEvents($characterId)
    {
        return $this->get("characters/{$characterId}/events");
    }

    public function findSeries($characterId)
    {
        return $this->get("characters/{$characterId}/series");
    }

    public function findStories($characterId)
    {
        return $this->get("characters/{$characterId}/stories");
    }
}