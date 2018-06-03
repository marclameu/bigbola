<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    //

    public function championship(){
        return $this->belongsTo('App\Championship');
    }

    public function groups(){
        return $this->hasMany('App\Group');
    }

    public function teams(){
        return $this->hasManyThrough('App\Team', 'App\Group');
    }
}
