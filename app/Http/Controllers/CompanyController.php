<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function retrieveData()
    {
        $company = Company::all();
        return response()->json($company);
    }
}
