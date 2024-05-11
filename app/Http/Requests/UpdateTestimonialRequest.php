<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'image' => 'image|mimes:png,jpg',
            'position' => 'required|string',
            'description' => 'string',
        ];
    }
    public function attributes()
    {
        return [
            'name' => __("keywords.name"),
            'postion' => __("keywords.postion"),
            'image' => __("keywords.image"),
            'description' => __("keywords.description"),
        ];
    }


}
