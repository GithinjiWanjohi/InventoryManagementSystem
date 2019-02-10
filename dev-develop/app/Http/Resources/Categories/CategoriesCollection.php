<?php

namespace App\Http\Resources\Categories;

use Illuminate\Http\Resources\Json\Resource;

class CategoriesCollection extends Resource
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
            'category_name' => $this->category_name,
            'description' => $this->description,
            'href' => [
                'link' => route('categories.show', $this->id),
            ],
        ];
    }
}
