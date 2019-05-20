<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingPurpose extends Model
{
    protected $table = 'booking_purposes'; // name of table in the database
    protected $guarded = ['id','label']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use

    public function Booking(){ 
    	return $this->hasMany('App\Booking'); 
    }
}
