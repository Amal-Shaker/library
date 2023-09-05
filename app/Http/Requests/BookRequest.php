<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name' => 'required',
            'releaseyear'=>'required',
            'releasenumber'=> 'required',
                    ];
    }
    public function messages(){
      return  [
            'name.required'=>'the name is required',
            'releaseyear.required'=>'the release year is required',
            'releasenumber.required'=>'the release number is required',
        ];
    }
}
