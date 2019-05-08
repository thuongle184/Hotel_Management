<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings'; // name of the table in the database
    protected $guarded = ['id','booking_type_id','user_id', 'room_id', 'entry_date', 'exit_date', 'booking_purpose_id']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
    public function booking_types() {
    	return $this->hasMany('App\BookingType', 'booking_type_id', 'id');
    }
    public function users() {
    	return $this->hasMany('App\User', 'user_id', 'id');
    }
    public function rooms() {
    	return $this->hasMany('App\Room', 'room_id', 'id');
    }
    public function booking_purposes() {
    	return $this->hasMany('App\BookingPurpose', 'booking_purpose_id', 'id');
    }
}
