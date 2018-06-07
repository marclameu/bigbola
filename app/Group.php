<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function teams(){
        return $this->hasMany('App\Team');
    }

    public function stages(){
        return $this->hasMany('App\Stage');
    }
}
