<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\SkillSet;

class StudentController extends Controller
{
    public function viewStudentList(){
    	$students = Student::all();
    	//dd($students);
    	return view ('student.index', compact('students'));
    }

    public function viewStudentInformation($id){
        $student = Student::find($id);
        $skillSets = SkillSet::where('student_id', $student->id)->get();
        return view ('student.viewInformation', compact('student', 'skillSets'));
    }

    public function viewskillSetList(){
    	return view ('student.skillSet');
    }
}
