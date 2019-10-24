<?php


namespace App\Characters\resources;


use Illuminate\Http\Resources\Json\JsonResource;

class CharactersResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'data'   => $this->data->results,
            'status' => $this->status,
            'code'   => $this->code
        ];
    }
}
