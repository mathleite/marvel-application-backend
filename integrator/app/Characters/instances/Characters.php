<?php


namespace App\Characters\instances;


use App\Characters\interfaces\CharactersInterface;
use Psr\Http\Message\ResponseInterface;
use stdClass;

class Characters implements CharactersInterface
{
    private $content;

    /** CharacterModel constructor
     *
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->content = json_decode($response->getBody()->getContents());
    }

    /** @return stdClass */
        public function getDecodedContent(): stdClass
    {
        return $this->content;
    }
}
