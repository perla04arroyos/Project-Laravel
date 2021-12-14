<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveProjectRequest extends FormRequest
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
            'title' => 'required',
            'url' => [
                'required', 
                // 'unique:projects,url'
                Rule::unique('projects')->ignore( $this->route('project') )
            ],
            'image' => [
                'required', 
                // 'mimes:jpeg,png',
                // 'dimensions:min_width=400,min_height=200',
                // 'dimensions:ratio=16/9',
                // 'max:2000' //tamaño maximo 2000 kb
            ], // 'image => jpeg, png, bmp, gif, svg o webp
            'description' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'The project needs a title'
        ];
    }
}
