<?php

namespace App\Http\Resources\Materials;

use Illuminate\Http\Resources\Json\Resource;
//use Illuminate\Http\Resources\Resource;

class MaterialsResource extends Resource
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
            'name' => $this->name,
            'categories_id' => $this->categories_id,
        ];
    }
}
