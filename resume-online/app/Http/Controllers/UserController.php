<?php

namespace App\Http\Controllers;

use App\Models\User2;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // แสดงหน้ารวมผู้ใช้
    public function index()
    {
        // ดึงข้อมูลผู้ใช้ทั้งหมดจากฐานข้อมูล
        $users = User2::all();

        // ส่งข้อมูลไปยัง view 'findUser.findUser'
        return view('findUser.findUser', compact('users'));
    }

    // แสดงรายละเอียดผู้ใช้
    public function show($id) {
        $user = User2::find($id);
        return view('findUser.userDetail', compact('user'));
    }

}
