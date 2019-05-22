<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'user_type_id'            =>'required|numeric',
            'title_id'                =>'required|numeric',
            'first_name'              => 'required',
            'middle_name'             => 'required',
            'last_name'               => 'required',
            'user_name'               =>'required' ,
            'DOB'                     => 'required',
            'email'                   =>'required|unique:users,email',
            'password'                =>'required|min:6|max:20',
            'address'                 => 'required',
            'phone'                   => 'required|numeric',
            'country_id'              =>'required|numeric',
            'identification_type_id'   => 'required|numeric',
            'information'             => 'required'
        ];
    }
    public function messages (){
        return[
            'user_type_id.required'           =>'Please choose user type',
            'title_id.required'               =>'Please choose user gender',
            'first_name.required'             =>'Please enter first name',
            'middle_name.required'            =>'Please enter middle name',
            'last_name.required'              =>'Please enter last name',
            'user_name.required'              =>'Please enter user name',
            'user_name.unique'                =>'User name has been exist',
            'DOB.required'                    =>'Please enter Day of Birth',
            'email.required'                  =>'Please enter email',
            'email.unique'                    =>'Email is exist',
            'password.required'               =>'Please enter password',
            'password.min'                    =>'Password at least 6 characters',
            'password.max'                    =>'Password not more than 20 characters',
            'address.required'                =>'Please enter address',
            'phone.required'                  =>'Please enter phone number',
            'country_id.required'             =>'Please choose country!',
            'identification_type_id.required'  =>'Please choose identification',
            'information.required'            =>'Please enter some ifnormation!',
        ];
    }
}
