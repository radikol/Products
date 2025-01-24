<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable',
            'image' => 'nullable|image|max:4096'
            // 'name' => 'required|min:5|max:255'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    // public function attributes()
    // {
    //     return [
    //         //
    //     ];
    // }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The product name is required.',
            'name.max' => 'Product name cannot exceed 255 characters.',
            'category_id.required' => 'Please select a category.',
            'category_id.exists' => 'Selected category is invalid.',
            'image.image' => 'The uploaded file must be an image.',
            'image.max' => 'Image size cannot exceed 2MB.'
        ];
    }
}
