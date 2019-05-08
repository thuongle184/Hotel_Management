<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'user_types'; // khai bao ten bang, bien bang thanh model
    protected $fillable = ['label']; // ten cua cac truong trong bang do
    public $timestamps=true; // thiet lap timestamp, cho phep su dung
    public function User(){ // ten model cua bang product
    	return $this->belongTo('App\User','user_type_id','id'); // quan he 1 nhieu voi bang product
    }

}
