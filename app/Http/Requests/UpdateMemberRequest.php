<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
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
            'position' => 'required|string',
            'facebook' => 'nullable|url',
            'youtube' =>'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'image' => 'nullabe|image|mimes:png,jpg',

        ];
    }
    public function attributes()
    {
        return [
            'name' => __("keywords.name"),
            'postion' => __("keywords.postion"),
            'image' => __("keywords.image"),
            'facebook' => __("keywords.facebook"),
            'twitter' => __("keywords.twitter"),
            'linkediin' => __("keywords.linkediin"),

        ];
    }

}
