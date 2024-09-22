<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // แสดงหน้ารวมผู้ใช้
    public function index(Request $request)
    {
        // ดึงค่าพารามิเตอร์ 'type' จากการร้องขอ
        $type = $request->input('type');

        // เริ่มต้นการ Query
        $query = User::with(['province', 'availableProvinces']);

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
    public function show($id) {
        $user = User::find($id);
        return view('findUser.userDetail', compact('user'));
    }

}
