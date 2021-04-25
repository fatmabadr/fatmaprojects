<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function Unit(){
        return $this->belongsToMany(Unit::class,'unit_features');
    }






}
