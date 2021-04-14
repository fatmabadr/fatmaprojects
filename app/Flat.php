<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    
    // public function User()
    // {
    // 	return $this->hasMany(Flat::class);
    // }


    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }

}
