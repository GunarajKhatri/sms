<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public function setTextAttribute($value){

    	return $this->attributes['text']=ucfirst($value);
    }
}
