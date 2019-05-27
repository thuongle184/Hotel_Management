<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VipCard extends Model
{
    protected $table = 'vipCards'; // name of table in the database
    
    protected $guarded = ['id','user_id', 'point']; // fields in the table
    
    public $timestamps=true; // set timestamp, allow to use
    
    public function user() {
    	return $this->belongsTo('App\User');
    }
}
