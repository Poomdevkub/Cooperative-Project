<?php

namespace App\Http\Controllers;

use App\Models\User2;
use App\Models\Work;
use DB;
use Illuminate\Http\Request;
use App\Models\Address;

class UserController extends Controller
{
    // แสดงหน้ารวมผู้ใช้
    public function index(Request $request)
    {

        $users = Work::getAll();

        // ส่งข้อมูลไปยัง view 'findUser.findUser' พร้อมกับค่าพารามิเตอร์ 'type'
        return view('findUser.findUser', compact('users'));
    }

    // แสดงรายละเอียดผู้ใช้
    public function show() {
        $a = Auth()->user()->id;
        $user = Work::findWorkById($a);

        $address = Work::findAddressById($user->workfinderID);
        $contact = Work::findContactById($user->workfinderID);
        return view('findUser.userDetail', compact('user','address','contact'));
    }
    public function getByid($id){
        
        $user = Work::findWorkByWorkId($id);
        $address = Work::findAddressById($user->workfinderID);
        $contact = Work::findContactById($user->workfinderID);
        $a = DB::table('users')->where('id',$user->userID)->first();
        $email = $a->email;

        return view('findUser.userDetail2', compact('user','address','contact','email'));
    }

    public function edit(){
        $a = Auth()->user()->id;
        $user = Work:: findWorkById($a);
        $province = Address::getProvince();

        $address = Work::findAddressById($user->workfinderID);
        $contact = Work::findContactById($user->workfinderID);
        return view('findUser.userEdit', compact('user','address','contact','province'));
    }

    public function update(Request $request){
        $a = Auth()->user()->id;
        
        $data = $request;

        Work::updateWork($a,$data);

        return UserController::show();
    }



}
