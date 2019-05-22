<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingTypeRequest extends FormRequest
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
          'label'          =>  'required|unique:booking_types,label,'.$this->get('id'),
          'online_plateform_id'  =>  'required'
       
        ];
    }

    public function messages()
    {
        return [
          'label.required'           =>  'The name of booking type is required',
          'label.unique'             =>  'This booking type has already been taken',
          'online_plateform_id.required'   =>  'The booking type is required'

        ];
    }
}
