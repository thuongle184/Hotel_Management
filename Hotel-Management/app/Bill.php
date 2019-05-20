<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills'; // name of the table in the database
    protected $guarded = ['id','user_id','booking_id','cashier_id']; // fields of the table
    public $timestamps=true; // set timestamp, allow to use

    public function users()
    {
    	return $this->belongsTo('App\User',['user_id', 'cashier_id'], 'user_id');
    }
    public function bookings() {
    	return $this->hasOne('App\Booking','booking_id','booking_id');
    }
}
