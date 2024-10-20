<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'customer_name' => 'required'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'name' => filter_var($this->name, FILTER_SANITIZE_STRING),
            'email' => filter_var($this->email, FILTER_SANITIZE_EMAIL),
        ]);
    }
}
