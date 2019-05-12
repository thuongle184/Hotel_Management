<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomSize extends Model
{
    protected $table = 'room_sizes'; // name of table in the database
    protected $guarded = ['id','label']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
    public function Room(){ // ten model cua bang 
    	return $this->belongTo('App\Room'); // quan he 1 nhieu voi bang product
    }
}
