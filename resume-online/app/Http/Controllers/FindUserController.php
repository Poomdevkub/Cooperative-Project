<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workfinder;
use App\Models\Workcontact;
use App\Models\Workaddress;

class FindUserController extends Controller
{
    public function index(Request $request)
    {
        // รับค่าการกรองจาก workType
        $workType = $request->input('workType', 'intern'); // ค่าเริ่มต้นเป็น intern

        // ดึงข้อมูลจากฐานข้อมูล
        $users = Workfinder::select('workfinder.*', 'workcontact.position', 'workaddress.province')
            ->join('workcontact', 'workfinder.workfinderID', '=', 'workcontact.workfinderID')
            ->join('workaddress', 'workfinder.workfinderID', '=', 'workaddress.workfinderID')
            ->where('workfinder.workType', $workType)
            ->get();

        return view('findUser.index', compact('users', 'workType'));
    }
}
