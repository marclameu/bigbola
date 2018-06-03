<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    //
    public function teamHome(){
        return $this->belongsTo('App\Team', 'team_home_id');
    }

    public function teamAlway(){
        return $this->belongsTo('App\Team', 'team_alway_id');
    }

    public function stage(){
        return $this->belongsTo('App\Stage');
    }

    public function bets(){
        return $this->hasMany('App\Bet');
    }
}
