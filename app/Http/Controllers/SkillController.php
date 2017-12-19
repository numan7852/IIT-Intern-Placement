<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\SkillSet;
use Auth;

class SkillController extends Controller
{
    public function viewStudentSkillSetList(){
    	$skills = Skill::all();
    	return view ('student.skillSet', compact('skills'));
    }

    public function viewRPOSkillSetList(){
    	return view ('company.skillSet');
    }

    public function storeSkillSet(Request $request){
    	for ($i=0; $i<count($request->skills); $i++) {
    		$skill = new Skill;
    		$skill->name = $request->skills[$i];
    		if(count(Skill::where('name', $skill->name)->get())<1){
    			$skill->save();
    		}
    	}
    	 return redirect('/home');
    }

    public function storeSkillScore(Request $request){
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
    }
}
