<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use App\Student;
use App\Allocation;
use Auth;
use App\Config;

class RatingFormController extends Controller
{
    public function viewRatingForm(){

        $config = Config::find(1);
        if($config->rating_form_status == 1){
            return view('ratingForm.ratingForm');
        }

        else{
            return redirect('/home');
        }

    	return view('ratingForm.ratingForm');
    }


    public function storeRating(Request $request){

    	$student = Student::where('user_id', Auth::user()->id)->first();
    	$ratings = Rating::where('student_id', $student->id)->get();
    	foreach ($ratings as $key => $rating) {
    		Rating::destroy($rating->id);
    	}

    	$total = 0;

    	for($i=0; $i < count($request->rating); $i++){
    		$total = $total + $request->rating[$i];
    	}

    	$allocation = Allocation::where('student_id', $student->id)->first();

    	$rating = new Rating;
    	$rating->student_id = $student->id;
    	$rating->company_id = $allocation->company_id;
    	$rating->rating = $total;
    	$rating->save();

    	return redirect()->back();

    }

    public function viewRating(){
        $ratings = Rating::orderBy('rating', 'DESC')->get();
    	return view('ratingForm.index', compact('ratings'));
    }
}
