<?php

namespace App\Http\Resources\TransactionIn;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionInResource extends JsonResource
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
            'dateTime_in' => $this->dateTime_in,
            'user_id' => $this->user_id,
            'materials_id' => $this->materials_id,
            'place_id' => $this->place_id,
            'description' => $this->description,
            'quantity' => $this->quantity,
        ];
    }
}
