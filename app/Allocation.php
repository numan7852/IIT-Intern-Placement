<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    public function student(){
    	return $this->belongsTo(Student::class);
    }

    public function company(){
    	return $this->belongsTo(Company::class);
    }
}
