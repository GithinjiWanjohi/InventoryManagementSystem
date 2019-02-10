<?php

namespace App\Http\Resources\Materials;

use Illuminate\Http\Resources\Json\Resource;

class MaterialsCollection extends Resource
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
            'name' => $this->name,
            'href' => [
                'categories_id' => route('categories.show', $this->id),
                'link' => route('materials.show', $this->id)
            ],
        ];
    }
}
