<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function show($id)
{
    // ดึงข้อมูล Company ตาม ID ที่ส่งมา
    $company = Company::findOrFail($id);

    // ส่งข้อมูลไปยังวิว
    return view('company.show', compact('company'));
}
/*
    public function edit()
{
    // Get the logged-in user's ID
    $userId = Auth::user()->id;

    // Fetch the company data where the userID matches the logged-in user's ID
    $company = Company::where('userID', $userId)->first();

    // Pass the company data to the view
    return view('company.edit', compact('company'));
}*/
public function edit($id)
{
    // ดึงข้อมูลบริษัทตาม ID
    $company = Company::findOrFail($id);

    // ส่งข้อมูลไปยังวิวสำหรับการแก้ไข
    return view('company.edit', compact('company'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'compName' => 'required|string|max:30',
        'compDescription' => 'nullable|string|max:800',
        'compAddress' => 'nullable|string|max:300',
        'compPhone' => 'nullable|string|max:30',
        'compEmail' => 'nullable|string|max:50|email',
        'compWebsite' => 'nullable|string|max:1000',
        'compContactName' => 'nullable|string|max:50',
        'compContactPosition' => 'nullable|string|max:1000',
    ]);

    // Find the company by ID and update the data
    $company = Company::findOrFail($id);
    $company->update($request->all());

    //return redirect()->route('company.show')->with('success', 'Company updated successfully.');
    return redirect('/company')->with('success', 'Company updated successfully.');
}

}

