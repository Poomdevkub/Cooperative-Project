<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Company;

class CompanyController extends Controller
{
    public function showCompany()
    {
        // Get the logged-in user's ID
        $userId = Auth::user()->id;

        // Fetch the company data where the userID matches the logged-in user's ID
        $company = Company::where('userID', $userId)->first();

        // Pass the company data to the view
        return view('company.show', compact('company'));
    }
}

