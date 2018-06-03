<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ball extends Model
{
    //
    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function championship(){
        return $this->belongsTo('App\Championship');
    }

    public function bets(){
        return $this->hasMany('App\Bet');
    }
}
