<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');      //call back function
    //return "<h1> Welcome จ้า </h1>";
});

// กรณีผู้ใช้ระบุpathไม่ถูกต้อง แล้วจะตอบกลับไปยังฝั่งผู้ใช้ (client)
Route::fallback(function() {
    return "<h1>ไม่พบหน้าเว็บดังกล่าว</h1>";
});

Route::get('type',function () {
    return view('type');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');      // ในส่วนของcall back function จะไปอยู่ในส่วนของ controller เเทน ทำงานประมวลผลในนั้นเลย

// Route สำหรับแสดงบริษัทที่
Route::get('/company', [CompanyController::class, 'show']);     //


Route::get('/' , function(){
    return view("welcome") ;
});


// Route::get('/' , function(){
//     return "<a href='".route('admin')."'>Login</a>" ;

// });


// Route::get('/admin/user/kong' , function(){
//     return "<h1>ยินดีต้อนรับ Admin</h1>" ;
// }) -> name('admin');


//                parametor    ส่งค่าอะไรมากับตัว path ดังกลฃล่าวได้ด้วย เก็บไว้ใน parameter name
// Route::get('/blog/{name}' , function($name){      // ตัวเเปล  name สามารถนำมาทำ อะรไสักอย่างใน call back ได้    call back คือ function ที่อยุ๋ใน path  /blog/{name}
//     return "<h1> บทความ ${name} </h1>";
// });


Route::fallback(function(){// ไม่มีการสร้าง route ไว้ มันก็จะเข้าตรงนี้เเทน
    // return "<a herf='".route('/home')."'></a>" ;
    return "<h1>ไม่พบหน้าเว็บ :> </h1>" ;
});
