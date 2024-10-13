<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_name' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return
        [
            'category_name.required' => '',
            'category_name.min' => 'Category Name must not be less than 3 letters',
        ];
    }

}