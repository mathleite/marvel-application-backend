<?php


namespace App\Marvel\interfaces;


use GuzzleHttp\Client;

interface MarvelApiServiceInterface
{
    public static function createClient(): Client;
}
