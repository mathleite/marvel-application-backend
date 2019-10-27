<?php


namespace App\Characters\resources;


use Illuminate\Http\Resources\Json\JsonResource;

class CharactersResource extends JsonResource
{
    public function toArray($request): array
    {
        $content = $this->getDecodedContent();

        return [
            'data'   => $content->data->results,
            'status' => $content->status,
            'code'   => $content->code
        ];
    }
}
