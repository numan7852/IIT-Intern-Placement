<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Student;
use App\Choice;
use Auth;
use App\Config;

class FormController extends Controller
{
    public function viewChoiceForm(){

        $config = Config::find(1);
        if($config->choice_form_status == 1){
            $companies = Company::all();
            $student = Student::where('user_id', Auth::user()->id)->first();
            return view('form.index',compact('companies', 'student'));
        }

        else{
            return redirect('/home');
        }
    }

    public function choiceFormEnable(Request $request){
        $config = Config::find(1);
        $config->choice_form_status = true;
        $config->save();

        return redirect()->back();
    }

    public function choiceFormDisable(Request $request){
        $config = Config::find(1);
        $config->choice_form_status = 0;
        $config->save();

        return redirect()->back();
    }


    public function ratingFormEnable(Request $request){
        $config = Config::find(1);
        $config->rating_form_status = true;
        $config->save();

        return redirect()->back();
    }

    public function ratingFormDisable(Request $request){
        $config = Config::find(1);
        $config->rating_form_status = 0;
        $config->save();

        return redirect()->back();
    }

    public function storeChoiceForm(Request $request){
    	if(count(array_unique($request->priority)) == count($request->priority)){
    		
    		$student = Student::where('user_id',Auth::user()->id)->first();
    		$student->session = $request->session;
    		$student->roll = $request->roll;

    		$student->save();

    		$choices = Choice::where('student_id', Auth::user()->student->id)->get();

    		foreach ($choices as $choice) {
    			Choice::destroy($choice->id);
    		}

    		for ($i=0; $i<count($request->priority); $i++){
	    		$choice = new Choice;
	    		$choice->student_id = Auth::user()->student->id;
				$choice->company_id = $request->id[$i];    	
	    		$choice->priority = $request->priority[$i];

	    		$choice->save();
	    		/*if(count(Choice::where('company_id', $choice->company_id)->where('student_id', Auth::user()->student->id)->get())<1){
	    			$choice->save();
	    		}*/
    		}

    	}
    	else{
    		return "False";
    	}

    	return redirect('/home');
    }
}


