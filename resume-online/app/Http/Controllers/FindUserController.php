<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Workfinder;
use App\Models\Workcontact;
use App\Models\Workaddress;
use App\Models\Address;
use App\Models\Work;

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

        $province = Address::getProvince();

        return view('findUser.index', compact('users', 'workType','province'));
    }

    public function search(Request $request)
    {
        // รับค่าการกรองจาก workType
        $workType = $request->workType; // ค่าเริ่มต้นเป็น intern

        // ดึงข้อมูลจากฐานข้อมูล
        $users = Work::searchUser($workType,$request->province);
        dd($users);
        

        $province = Address::getProvince();

        return view('findUser.index', compact('users', 'workType','province'));
    }
}
