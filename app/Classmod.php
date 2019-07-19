<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classmod extends Model
{
    public function section(){
    	return $this->hasMany(Section::class);
    }
    public function student(){
    	return $this->hasMany(Student::class);
    }
}
