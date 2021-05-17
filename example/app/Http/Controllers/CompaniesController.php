<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


use App\Models\Companies;

class CompaniesController extends Controller
{
    //
 public function getCompanies(){
        $obj = new Companies();
        $companies = $obj->paginate(10);
        return view('companies', ['companies' => $companies]);
        
    }
}



