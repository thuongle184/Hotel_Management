<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms'; // name of the table in the database
    protected $guarded = ['id','room_size_id','number', 'is_smoking', 'price', 'is_available', 'bed_number', ]; // Fields in the table
    public $timestamps=true; // set timestamp, allow to use
    public function room_sizes()
    {
    	return $this->hasMany('App\RoomSize','room_size_id', 'id');
    }
}
