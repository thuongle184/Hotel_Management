<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentificationType extends Model
{
    protected $table = 'identification_types'; // name of table in the database
    protected $guarded = ['id','label']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use

    public function users() {
      return $this->hasMany('App\User');
    }
}
