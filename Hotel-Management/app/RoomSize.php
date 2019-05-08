<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomSize extends Model
{
    protected $table = 'room_sizes'; // name of table in the database
    protected $guarded = ['id','label']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
}
