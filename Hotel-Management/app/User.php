<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // name of table in the database
    protected $guarded = ['id','user_type_id', 'title_id', 'first_name', 'middle_name', 'last_name', 'user_name', 'DOB', 'password', 'address', 'email', 'phone', 'country_id', 'identification_type_id', 'information']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
    public function user_types() {
    	return $this->hasMany('App\UserType', 'user_type_id', 'id');
    }
    public function countries() {
    	return $this->hasMany('App\Country', 'country_id', 'id');
    }
    public function identification_types() {
    	return $this->hasMany('App\IdentificationType', 'identification_type_id', 'id');
    }
    
}
