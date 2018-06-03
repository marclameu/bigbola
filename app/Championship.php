<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    //
    public function balls(){
        return $this->hasMany('App\Ball');
    }

    public function stages(){
        return $this->hasMany('App\Stage');
    }
}
