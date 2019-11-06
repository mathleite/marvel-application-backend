<?php


namespace App\Characters\interfaces;


use stdClass;

interface CharactersInterface
{
    /** @return stdClass */
    public function getDecodedContent(): stdClass;
}
