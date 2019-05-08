<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomEquipment extends Model
{
    protected $table = 'orders'; // name of table in the database
    protected $guarded = ['id','room_id','equipment_id']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
    public function rooms()
    {
    	return $this->belongstoMany('App\Room','room_id', 'id');
    }
    public function equipment()
    {
    	return $this->belongstoMany('App\Equipment','equipment_id', 'id');
    }
}
