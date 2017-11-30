<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingFormController extends Controller
{
    public function viewRatingForm(){
    	return view('ratingForm.index');
    }
}
