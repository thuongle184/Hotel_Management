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
    	return $this->belongstoMany('App\Bill','bill_id', 'id');
    }
    public function dishes()
    {
    	return $this->belongstoMany('App\Dish','dish_id', 'id');
    }
}
