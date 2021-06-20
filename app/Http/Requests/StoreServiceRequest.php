<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'title' => 'required|string|max:191',
            'image' => 'image|nullable',

            'seo_title' => 'string|nullable|max:60',
            'seo_description' => 'string|nullable|max:159',

            'zip' => 'string|nullable|max:5000',
            'iframe' => 'string|nullable|max:5000',

            'content_1' => 'string|nullable|max:5000',
            'content_1_1' => 'string|nullable|max:5000',
            'image_1' => 'image|nullable',

            'content_2' => 'string|nullable|max:5000',
            'content_2_1' => 'string|nullable|max:5000',
            'image_2' => 'image|nullable',

            'content_3' => 'string|nullable|max:5000',
            'content_3_1' => 'string|nullable|max:5000',
            'image_3' => 'image|nullable',

            'content_4' => 'string|nullable|max:5000',
            'content_4_1' => 'string|nullable|max:5000',
            'image_4' => 'image',
        ];
    }
}
