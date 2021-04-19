<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function Feature(){
        return $this->belongsToMany(Feature::class,'unit_features');
       
    }

}
