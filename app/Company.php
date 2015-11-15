<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "companies";

    public function users(){
    	return $this->hasMany('App\User');
    }

    public function office(){
    	return $this->hasOne('App\Office');
    }
}
