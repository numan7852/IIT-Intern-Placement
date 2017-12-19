<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function viewStudentList(){
    	$students = Student::all();
    	//dd($students);
    	return view ('student.index', compact('students'));
    }

    public function viewStudentInformation(){
        return view ('student.viewInformation');
    }

    public function viewskillSetList(){
    	return view ('student.skillSet');
    }
}
