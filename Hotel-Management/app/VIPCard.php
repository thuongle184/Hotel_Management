<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VIPCard extends Model
{
    protected $table = 'vip_cards'; // name of table in the database
    
    protected $guarded = ['id','user_id', 'point']; // fields in the table
    
    public $timestamps=true; // set timestamp, allow to use
    
    public function users() {
    	return $this->belongsTo('App\User', 'user_id', 'user_id');
    }
}
