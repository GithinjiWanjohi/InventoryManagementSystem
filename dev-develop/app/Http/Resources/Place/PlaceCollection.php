<?php

namespace App\Http\Resources\Place;

use Illuminate\Http\Resources\Json\Resource;

class PlaceCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
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
