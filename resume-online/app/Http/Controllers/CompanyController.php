<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * แสดงรายละเอียดของบริษัทที่ compID = 1
     */
    public function show()
    {
        // ดึงข้อมูลบริษัทที่ compID = 1
        $company = Company::find(1);

        // ตรวจสอบว่ามีข้อมูลหรือไม่
        if (!$company) {
            return view('company.notfound', ['id' => 1]);
        }

        // ส่งข้อมูลไปยัง View
        return view('company.show', ['company' => $company]);
    }
}
