<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipment'; // name of table in the database
    protected $guarded = ['id','label']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
}
