<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnlinePlateformRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtlabel'          => 'required|unique:dish_type,label',
        ];
    }

    public function messages() {
        return [
            'txtlabel.required'        => 'Please enter the name of booking purpose!',
            'txtlabel.unique'          => 'Sorry this name is already exit!',      
        ];
    }
}
