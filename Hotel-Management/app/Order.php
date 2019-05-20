<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders'; // name of the table in the database
    protected $guarded = ['id','bill_id','dish_id']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use

    public function bills()
    {
    	return $this->hasOne('App\Bill');
    }
    public function dishes()
    {
    	return $this->hasOne('App\Dish');
    }
}
