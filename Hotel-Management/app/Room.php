<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms'; 
    protected $guarded = ['id'];
    protected $fillable = ['room_size_id','number', 'is_smoking', 'price', 'is_available', 'beds']; 
    public $timestamps=true;

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
