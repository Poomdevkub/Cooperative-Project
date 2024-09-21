<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // แสดงหน้ารวมผู้ใช้
    public function index()
    {
        // ดึงข้อมูลผู้ใช้ทั้งหมดจากฐานข้อมูล
        $users = User::all();

        // ส่งข้อมูลไปยัง view 'findUser.findUser'
        return view('findUser.findUser', compact('users'));
    }

    // แสดงรายละเอียดผู้ใช้
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('findUser.userDetail', compact('user')); // ชี้ไปยัง 'findUser.userDetail'
    }
}
