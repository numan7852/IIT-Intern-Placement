<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillSet extends Model
{
    protected $table = 'skill_sets';

    public function student(){
    	return $this->belongsTo(Student::class);
    }

    public function skill(){
    	return $this->belongsTo(Skill::class);
    }
}
