<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'image' => 'required|image|mimes:png,jpg',
            'position' => 'required|string',
            // 'facebook' => 'required|string',
            // 'twitter' => 'required|string',
            // 'instagram' => 'required|string',
            // 'youtube' => 'required|string',
            // 'linkedin' => 'required|string',

        ];
    }
    public function attributes()
    {
        return [
            'name' => __("keywords.name"),
            'postion' => __("keywords.postion"),
            'image' => __("keywords.image"),
            'facebook' =>  __("keywords.facebook"),
            'twitter' =>  __("keywords.twitter"),
            'instagram' =>  __("keywords.instagram"),
            'youtube' =>  __("keywords.youtube"),
            'linkedin' =>  __("keywords.linkedin"),

        ];
    }

}
