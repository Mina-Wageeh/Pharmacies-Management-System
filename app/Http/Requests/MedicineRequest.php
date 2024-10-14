<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicineRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return
        [
            'medicine_name' => 'required|min:3',
            'medicine_code' => 'required|regex:/[A-Z]{2}[0-9]{4}/',
            'medicine_price' => 'required|numeric',
            'medicine_quantity' => 'required|integer',
            'category_id' => 'required|numeric',
        ];
    }
}
