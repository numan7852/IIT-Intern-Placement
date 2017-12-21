<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';

    public function company(){
    	return $this->belongsTo(Company::class);
    }
}
