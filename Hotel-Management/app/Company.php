<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies'; // name of table in the database
    protected $guarded = ['id','user_id', 'name']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
     public function users() {
    	return $this->hasMany('App\User', 'user_id', 'id');
    }
}
