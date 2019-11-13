<?php


namespace App\Characters\collections;


use Illuminate\Support\Collection;

class CharactersCollection
{
    private $charactersCollection;

    /**
     * CharactersCollection constructor.
     *
     * @param Collection $collection
     */
    public function __construct(Collection $collection)
    {
        $this->charactersCollection = $collection;
    }

    /** @return array */
    public function getToArray(): array
    {
        return $this->charactersCollection->toArray();
    }
}
