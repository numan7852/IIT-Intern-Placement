<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyAllocationController extends Controller
{
    public function viewAllocationList(){
    	return view('company.companyAllocationList');
    }
}
