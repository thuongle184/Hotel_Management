<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DishType extends Model
{
    protected $table = 'dish_types'; // name of table in the database
    protected $guarded = ['id','label']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
}
