<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvMedicineRequest extends FormRequest
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
                'inv_medicine_name' => 'required|min:3',
                'inv_medicine_code' => 'required|regex:/[A-Z]{2}[0-9]{4}/',
                'inv_medicine_price' => 'required|numeric',
                'inv_medicine_quantity' => 'required|integer',
            ];
    }
}
