<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = "offices";


    public function device(){
    	return $this->belongsTo('App\Device');
    }

    public function companies(){
    	return $this->hasMany('App\Company');
    }
}
