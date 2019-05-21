<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlinePlateform extends Model
{
    protected $table = 'online_plateforms'; // name of table in the database
    protected $guarded = ['id','label']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use

    public function bookingTypes() {
    	return $this->hasMany('App\BookingType');
    }
}
