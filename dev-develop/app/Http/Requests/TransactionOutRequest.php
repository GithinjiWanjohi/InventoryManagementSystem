<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionOutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'dateTime_out' => 'required|date|after_or_equal:today',
            'user_id' => 'required',
            'materials_id' => 'required',
            'place_id' => 'required',
            'description' => 'required',
            'quantity' => 'required',
        ];
    }
}
