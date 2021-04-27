<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function Unit(){
        return $this->hasMany(Unit::class);
        
    }
}
