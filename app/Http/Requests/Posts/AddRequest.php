<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name Post cannot be blank',
            'name.string' => 'Name Post must be string',
            'image.image' => 'Invalid image',
            'image.mimes' => 'Invalid image format',
            'description.required' => 'Description cannot be blank',
            'description.string' => 'Description must string'
        ];
    }
}
