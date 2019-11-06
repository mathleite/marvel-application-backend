<?php


namespace App\Marvel\interfaces;


interface MarvelEnvApiInterface
{
    /** @return array */
    public static function getRequestOptions(): array;
}
