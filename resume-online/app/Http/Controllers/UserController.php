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

    public function followUser($id)
{
    // รับข้อมูลบริษัทที่ login อยู่ในปัจจุบัน
    $companyID = auth()->user()->company->compID; // company ที่ login เข้าระบบ
    $follow = \App\Models\CompanyFollowing::where('compID', $companyID)
                                          ->where('workfinderID', $id)
                                          ->first();

    // ตรวจสอบว่าบริษัทนี้ได้ติดตามผู้ใช้นี้แล้วหรือยัง
    if (!$follow) {
        // ถ้ายังไม่ได้ติดตาม ก็สร้างการติดตามใหม่
        \App\Models\CompanyFollowing::create([
            'compID' => $companyID,
            'workfinderID' => $id,
            'companyFollowingTypeID' => 1 // ประเภทของการติดตาม (เช่น ติดตามทั่วไป)
        ]);

        return redirect()->back()->with('success', 'ติดตามผู้ใช้งานนี้เรียบร้อยแล้ว');
    }

    return redirect()->back()->with('error', 'คุณได้ติดตามผู้ใช้นี้แล้ว');
}


}
