<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\HR;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function viewCompanyList(){
    	$companies = Company::all();
        return view ('company.index', compact('companies'));
    }

    public function viewCompanyInformation(){
        return view ('company.viewInformation');
    }

    public function showCompanyAddForm(){
    	return view ('company.add');
    }

    public function storeCompanyInformation(Request $request){

        $hr = HR::where('user_id', Auth::user()->id)->first();

        if(count($hr)<1){
            $company = new Company;
            $company->name = $request->name;
            $company->address = $request->address;
            $company->website = $request->website;

            $company->save();

            $hr->company_id = $company->id;
            $hr->save();
        }

        else{
            return "Company already exist.";
        }

    	return view ('company.viewInformation');
    }
}




