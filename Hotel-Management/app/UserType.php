<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'user_types'; // name of table in the database
    protected $guarded = ['id','label']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
    public function User(){ // ten model cua bang 
    	return $this->belongTo('App\User','user_type_id','id'); // quan he 1 nhieu voi bang product
    }
}
