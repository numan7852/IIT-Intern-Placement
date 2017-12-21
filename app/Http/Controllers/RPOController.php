<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class RPOController extends Controller
{
    public function viewUploadCGPA(){
    	$students = Student::all();
    	return view ('rpo.uploadCGPA', compact('students'));
    }

    public function storeCGPA(Request $request){
    	for($i=0; $i<count($request->cgpa); $i++){
    		$student = Student::find($request->id[$i]);
    		$student->cgpa = $request->cgpa[$i];
    		$student->save();
    	}
    	return redirect('/home');
    }


/*    public function storeSkillScore(Request $request){
    	for ($i=0; $i<count($request->skill_score); $i++){
    		$skillSet = new SkillSet;
    		$skillSet->student_id = Auth::user()->student->id;
			$skillSet->skill_id = $request->id[$i];    	
    		$skillSet->score = $request->skill_score[$i];

    		if(count(SkillSet::where('skill_id', $skillSet->skill_id)->where('student_id', Auth::user()->student->id)->get())<1){
    			$skillSet->save();
    		}
    	}

    	return redirect('/home');
    }*/
}
