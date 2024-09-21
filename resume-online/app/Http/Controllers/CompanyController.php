<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * แสดงรายละเอียดของบริษัทที่ compID = 1
     */
    public function show($id)
    {
        // ดึงข้อมูลบริษัทที่ compID เท่ากับ $id พร้อมกับข้อมูลความสัมพันธ์
        $company = Company::with(['companyType', 'province', 'district', 'subdistrict'])
                          ->where('compID', $id)
                          ->first();

        // เช็คว่ามีข้อมูลหรือไม่
        if (!$company) {
            return abort(404, 'Company not found');
        }

        // ส่งข้อมูลไปยัง view
        return view('company.show', compact('company'));
    }
}
