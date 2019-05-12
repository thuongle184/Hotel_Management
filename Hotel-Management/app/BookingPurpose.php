<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingPurpose extends Model
{
    protected $table = 'booking_purposes'; // name of table in the database
    protected $guarded = ['id','label']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
    public function Booking(){ // ten model cua bang 
    	return $this->belongTo('App\Booking'); // quan he 1 nhieu voi bang product
    }
}
