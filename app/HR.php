<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HR extends Model
{
    protected $table = 'hrs';

    public function company(){
    	return $this->hasOne(Company::class);
    }
}
