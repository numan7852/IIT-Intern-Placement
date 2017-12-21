<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Company;
use App\SkillSet;
use App\RequiredSkill;
use App\Skill;
use App\Choice;
use App\Allocation;
use App\HR;
use Auth;

class CompanyAllocationController extends Controller
{
    public function viewAllocationList(){
        if(Auth::user()->type == 'IPOH' || Auth::user()->type == 'RPO'){
            $allocations = Allocation::all();    
        }
        elseif(Auth::user()->type == 'HR'){
            $hr = HR::where('user_id', Auth::user()->id)->first();
            $allocations = Allocation::where('company_id', $hr->company_id)->get();
        }
        else{
            $student = Student::where('user_id', Auth::user()->id)->first();
            $allocations = Allocation::where('student_id', $student->id)->get();
        }
    	return view('company.companyAllocationList', compact('allocations'));
    }

    public function getPreferenceValueStudent($student, $number_of_company){
    	
    	$skills = Skill::all();
    	$total = 0;

    	foreach($skills as $skill){
    		$skillSet = SkillSet::where('student_id', $student->id)->where('skill_id', $skill->id)->first();
    		if($skillSet != null){
    			$skillRatio = min(1, $skillSet->score/5);
				$weight = $skillSet->score/count($skills)*5;
				$total = $total + $skillRatio*$weight;
    		}
    	}

    	return $total + $student->cgpa/4;
    }


    public function sortBy(&$items, $key, $descending = false){
      if (is_array($items)){
        return usort($items, function($a, $b) use ($key, $descending){
          $cmp = strCmp($a[$key], $b[$key]);
          return $descending? -$cmp : $cmp;
        });
      }
      return false;
    }

    public function allocate(Request $request){
    	$students = Student::all();
    	$companies = Company::all();
    	$skills = Skill::all();

		$result = array();
		foreach ($students as $key2 => $student) {
			array_push($result, array($student->id, $this->getPreferenceValueStudent($student, count($companies))));
		}

		$this->sortBy($result, 1, true);


		for($i=0; $i< count($result); $i++){

			$student = Student::find($result[$i][0]);

			$choices = Choice::where('student_id', $result[$i][0])->orderBy('priority', 'ASC')->get();

			foreach($choices as $choice){
				$allocation = Allocation::where('company_id', $choice->company_id)->get();
				$company = Company::find($choice->company_id);
				if ($company->number_of_interns > count($allocation)) {
					$new_allocation = new Allocation;
					$new_allocation->student_id = $student->id;
					$new_allocation->company_id = $company->id;
					$new_allocation->save();
					break;
				}
			}
		}

        return redirect()->route('companyAllocation');

    }

}
