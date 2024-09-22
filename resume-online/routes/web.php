<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');      //call back function
    //return "<h1> Welcome จ้า </h1>";
});

// Route::get('/' , function(){
//     return view("welcome") ;
// });




// กรณีผู้ใช้ระบุpathไม่ถูกต้อง แล้วจะตอบกลับไปยังฝั่งผู้ใช้ (client)
Route::fallback(function() {
    return "<h1>ไม่พบหน้าเว็บดังกล่าว</h1>";
});

// Route::fallback(function(){// ไม่มีการสร้าง route ไว้ มันก็จะเข้าตรงนี้เเทน
//     // return "<a herf='".route('/home')."'></a>" ;
//     return "<h1>ไม่พบหน้าเว็บดังกล่าว :> </h1>" ;
// });




// Route::get('type',function () {
//     return view('type');
// });

// Route::get('user-dash', function () {
//     return view('user/user-dash');
// });

Route::get('/home', [HomeController::class, 'index'])->name('home');      // ในส่วนของcall back function จะไปอยู่ในส่วนของ controller เเทน ทำงานประมวลผลในนั้นเลย

// Route สำหรับแสดงบริษัทที่
// Route::get('/company', [CompanyController::class, 'show']);     //




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


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//home ของจริง
//Route::get('/', function () { return view('jobie'); })->name('jobie');

// Route::get('/jobie', function () { return view('jobie'); })->name('home');

// Route::redirect('/home', '/jobie');     // redirect ไปยังหน้า home
// Route::redirect('/', '/jobie');     // redirect ไปยังหน้า home




// Route สำหรับหน้าหลักหลังล็อกอิน
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route สำหรับแสดงข้อมูลบริษัท
// Route::get('/company', [CompanyController::class, 'show'])->name('company.show');

// Route สำหรับหน้า findUser (แยกออกมา)
Route::get('/findUser', [UserController::class, 'index'])->name('findUser');
Route::resource('users', UserController::class);

// Route สำหรับดูรายละเอียดผู้ใช้แต่ละคน
// Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/login', function () { return view('/auth/login'); })->name('login');

Route::get('/register', function () { return view('/auth/register'); })->name('register');

// Route::get('/register/type', function () { return view('/auth/type'); })->name('type');

// Route::get('/company/{id}', [CompanyController::class, 'show'])->name('company.show');
