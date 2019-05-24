<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'user_id'                 =>'required|numeric',
            'name'                   => 'required|unique:companies,name,'.$this->get('id')
        ];
    }

    public function messages (){
        return[
            'user_id.required'                =>'Please choose user',
            'name.required'                   =>'Please company name',
            'name.unique'                     =>'Company name has is exist'
        ];
    }
}
