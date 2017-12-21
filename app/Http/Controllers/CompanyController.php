<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\HR;
use App\Skill;
use App\RequiredSkill;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function viewCompanyList(){
    	$companies = Company::all();
        return view ('company.index', compact('companies'));
    }

    public function viewCompanyInformation(){

        $hr = HR::where('user_id', Auth::user()->id)->first();

        if(count($hr)<1){
            return redirect()->route('companyInformation');
        }

        else{
            $company = Company::find($hr->company_id);
            return view ('company.viewInformation', compact('company'));
        }
    }

    public function showCompanyAddForm(){
        $skills = Skill::all();
        return view ('company.add', compact('skills'));
    }

    public function showCompanyEditForm(){

        $hr = HR::where('user_id', Auth::user()->id)->first();
        $company = Company::find($hr->company_id);

        $skills = Skill::all();
        return view ('company.edit', compact('company', 'skills'));
    }

    public function storeCompanyInformation(Request $request){

        $company = new Company;

        $hr = HR::where('user_id', Auth::user()->id)->first();

        if(count($hr)<1){

            $company->name = $request->name;
            $company->address = $request->address;
            $company->website = $request->website;
            $company->number_of_interns = $request->num;

            $company->save();

            $hr = new HR;
            $hr->user_id = Auth::user()->id;
            $hr->company_id = $company->id;
            $hr->status = 0;
            $hr->save();

/*            for ($i=0; $i<count($request->skill_score); $i++){

                $requiredSkill = new RequiredSkill;
                $requiredSkill->company_id = $company->id;
                $requiredSkill->skill_id = $request->id[$i];     
                $requiredSkill->score = $request->skill_score[$i];

                $requiredSkill->save();
            }*/
        }

    	return view ('company.viewInformation', compact('company'));
    }

    public function updateCompanyInformation(Request $request){

        $hr = HR::where('user_id', Auth::user()->id)->first();

        $company = Company::find($hr->company_id);

        $company->name = $request->name;
        $company->address = $request->address;
        $company->website = $request->website;
        $company->save();

        for ($i=0; $i<count($request->skill_score); $i++){
                
            $requiredSkill = RequiredSkill::where('skill_id', $request->id[$i])->where('company_id', $company->id)->first();

            $requiredSkill->score = $request->skill_score[$i];

            $requiredSkill->save();
        }

        return view ('company.viewInformation', compact('company'));
    }
}




