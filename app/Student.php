<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function skillSets(){
    	return $this->belongsTo(SkillSet::class);
    }

    public function allocation(){
    	return $this->hasOne(Allocation::class);
    }
}
