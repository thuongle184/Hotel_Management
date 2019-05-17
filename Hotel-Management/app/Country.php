<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries'; // name of table in the database
    protected $guarded = ['id','label']; // fields in the table

    public $rules = [
        'label' => 'required|unique:countries'
      ];

    public $messages = [
        'label.required' => 'The name of the country is required',
        'label.unique:countries' => 'This country name has already been taken'
      ];

    public $timestamps=true; // set timestamp, allow to use
}
