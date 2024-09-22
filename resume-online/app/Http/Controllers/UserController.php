<?php

namespace App\Http\Controllers;

use App\Models\User2;
use App\Models\Work;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // แสดงหน้ารวมผู้ใช้
    public function index(Request $request)
    {
        // ดึงข้อมูลผู้ใช้ทั้งหมดจากฐานข้อมูล
        $users = User2::all();
        // ดึงค่าพารามิเตอร์ 'type' จากการร้องขอ
        $type = $request->input('type');

        // เริ่มต้นการ Query
        $query = User2::with(['province', 'availableProvinces']);

        // ถ้ามีการระบุประเภทผู้ใช้, เพิ่มเงื่อนไขการกรอง
        if ($type && in_array($type, ['work', 'intern'])) {
            $query->where('userType', $type);
        }

        // ดึงข้อมูลผู้ใช้ตามเงื่อนไขที่กำหนด
        $users = $query->get();

        // ส่งข้อมูลไปยัง view 'findUser.findUser' พร้อมกับค่าพารามิเตอร์ 'type'
        return view('findUser.findUser', compact('users', 'type'));
    }

    // แสดงรายละเอียดผู้ใช้
    public function show() {
        $a = Auth()->user()->id;
        $user = Work:: findWorkById($a);

        $address = Work::findAddressById($user->workfinderID);
        $contact = Work::findContactById($user->workfinderID);
        return view('findUser.userDetail', compact('user','address','contact'));
    }

    public function edit(){
        $a = Auth()->user()->id;
        $user = Work:: findWorkById($a);

        $address = Work::findAddressById($user->workfinderID);
        $contact = Work::findContactById($user->workfinderID);
        return view('findUser.userEdit', compact('user','address','contact'));
    }

    public function update(Request $request){
        $a = Auth()->user()->id;
        
        $data = $request;

        Work::updateWork($a,$data);

        return UserController::show();
    }

}
