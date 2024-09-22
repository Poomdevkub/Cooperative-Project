<?php

namespace App\Http\Controllers;

use App\Models\Company; // แก้ไขการนำเข้าที่นี่
use Illuminate\Http\Request;
use App\Models\CompanyFollowing;
use Illuminate\Support\Facades\Auth;

class CompanyFollowingController extends Controller
{
    public function index()
    {
        // ตรวจสอบว่าผู้ใช้ล็อกอินหรือไม่
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // ดึงข้อมูลบริษัทที่ผู้ใช้เข้าสู่ระบบ
        $userId = Auth::id();
        $companyId = Company::where('userID', $userId)->value('compID');

        // ดึงข้อมูล companyfollowing ตาม compID
        $companyFollowings = CompanyFollowing::with(['company', 'companyFollowingType', 'workfinder'])
            ->where('compID', $companyId)
            ->get();

        return view('companyfollowing.index', compact('companyFollowings'));
    }
}
