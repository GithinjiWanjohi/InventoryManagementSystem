<?php

namespace App\Http\Resources\Place;

use Illuminate\Http\Resources\Json\JsonResource;

class PlaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'place_name' => $this->place_name,
            'description' => $this->description,
            'href' => [
                'link' => route('places.show', $this->id)
            ],
        ];
    }
}
