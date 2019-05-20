<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // name of table in the database
    protected $guarded = ['id','user_type_id', 'title_id', 'first_name', 'middle_name', 'last_name', 'user_name', 'DOB', 'password', 'address', 'email', 'phone', 'country_id', 'identification_type_id', 'information']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use


    public function bookings() {
      return $this->hasMany('App\Booking');
    }

    public function companies() {
      return $this->hasMany('App\Company');
    }

    public function country() {
      return $this->belongsTo('App\Country');
    }

    public function identificationType() {
      return $this->belongsTo('App\IdentificationType');
    }
    
    public function title() {
      return $this->belongsTo('App\Title');
    }

    public function userType() {
      return $this->belongsTo('App\UserType');
    }

    public function vipCard() {
      return $this->hasOne('App\VipCard');
    }

    public function userBills() {
      return $this->hasMany('App\Bill', 'user_id', 'id');
    }

    public function cashierBills() {
      return $this->hasMany('App\Bill', 'cashier_id', 'id');
    }
}
