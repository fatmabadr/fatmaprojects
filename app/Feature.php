<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function Flat(){
        return $this->belongsTo(Flat::class,'flat_id');
    }






}
