<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VipCardRequest extends FormRequest
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
          'user_id'  =>  'required',
          'point'          =>  'required|unique:dishes,name,'.$this->get('id')
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
          'user_id.required'   =>  'The dish category is required',
          'point.required'           =>  'The point of the dish is required',
          'point.unique'             =>  'This dish point has already been taken'
        ];
    }
}
