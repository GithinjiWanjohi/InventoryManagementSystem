<?php

namespace App\Http\Resources\TransactionOut;

use Illuminate\Http\Resources\Json\Resource;

class TransactionOutCollection extends Resource
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
            'dateTime_out' => $this->dateTime_out,
            'user_id' => $this->user_id,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'href' => [
                'materials_id' => route('materials.show', $this->materials_id),
                'place_id' => route('places.show', $this->place_id),
                'link' => route('transaction_ins.show', $this->id),
            ],
        ];
    }
}
