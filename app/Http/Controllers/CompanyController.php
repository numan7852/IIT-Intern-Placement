<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function viewCompanyList(){
    	return view ('company.index');
    }
}

