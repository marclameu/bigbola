<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    public function groups(){
        return $this->hasMany('App\Group');
    }

    public function stages(){
        return $this->hasManyThrough('App\Stage', 'App\Group');
    }

    public function championships(){
        return $this->belongsToMany('App\Championship');
    }
}
