<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ButtonRequest extends FormRequest
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
            'title' => 'required|max:255',
            'link' => 'required|url|max:255'
        ];
    }
    public function messages()
    {
        return [
        'title.required'     => 'Title is is required!',
        'title.max'          =>  'Title can not be more than 255 characters!',
        'link.required'    => 'Link is required!',
        'link.url'       => 'Link field needs to be a valid http:// or https:// address!',
        'link.max'      => 'Link can not be more than 255 characters!',
        ];
    }
}
