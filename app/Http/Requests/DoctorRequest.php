<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'doctor_name' => 'required|min:3',
            'doctor_nat_id' => 'required|min:14|max:14',
            'doctor_age' => 'required|numeric',
            'doctor_phone' => 'required|regex:/01[0125][0-9]{8}/',
            'doctor_address' => 'required|max:300',
        ];
    }
}
