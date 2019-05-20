<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipment'; // name of table in the database
    protected $guarded = ['id','label']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use

    public function rooms()
    {
    	return $this->belongsToMany('App\Room', 'room_equipments', 'equipment_id', 'room_id');
    	
    }
}
