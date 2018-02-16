<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function phones(){
        return $this->belongsToMany('App\Phone');
    }
}
