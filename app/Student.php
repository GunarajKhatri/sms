<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     public function classmod(){
    	return $this->belongsTo(Classmod::class);
    }
}
