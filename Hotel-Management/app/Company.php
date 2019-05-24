<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies'; // name of table in the database
    protected $guarded = ['id']; // fields in the table
    protected $fillable = ['user_id', 'name']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
