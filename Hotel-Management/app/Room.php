<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms'; // name of the table in the database
    protected $guarded = ['id','room_size_id','number', 'is_smoking', 'price', 'is_available', 'bed_number', ]; // Fields in the table
    public $timestamps=true; // set timestamp, allow to use

    public function roomSize()
    {
    	return $this->belongsTo('App\RoomSize');
    }

    public function equipments()
    {
    	return $this->belongsToMany('App\Equipment'); 	
    }

    public function bookings()
    {
        return $this->hasMany('App\Booking');     
    }
}
