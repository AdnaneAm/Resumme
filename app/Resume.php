<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    public function orders(){
        return $this->belongsToMany('App\Order');
    }
}
