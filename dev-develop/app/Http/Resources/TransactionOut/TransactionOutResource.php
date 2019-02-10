<?php

namespace App\Http\Resources\TransactionOut;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionOutResource extends JsonResource
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
            'dateTime_out' => $this->dateTime_out,
            'user_id' => $this->user_id,
            'materials_id' => $this->materials_id,
            'place_id' => $this->place_id,
            'description' => $this->description,
            'quantity' => $this->quantity,
        ];
    }
}
