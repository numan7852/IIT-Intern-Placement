<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
 	protected $table = 'companies';

   public function requiredSkills(){
   		return $this->hasMany(RequiredSkill::class);
   }

   public function hr(){
    	return $this->belongsTo(HR::class);
    }
}

