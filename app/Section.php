<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function classmod(){
    	return $this->belongsTo(Classmod::class);
    }
}
