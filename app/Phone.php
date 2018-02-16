<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'phone', 'description', 'cost','image',
    ];

//    public function getShortDescriptionAttribute(){
//        return substr($this->description,0,random_int(20,200));
//    }

    public function carts(){
        return $this->belongsToMany('App\Cart');
    }
}
