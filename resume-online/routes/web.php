<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;

// กรณีผู้ใช้ระบุpathไม่ถูกต้อง แล้วจะตอบกลับไปยังฝั่งผู้ใช้ (client)
Route::fallback(function() {   
    return "<h1>ไม่พบหน้าเว็บดังกล่าว</h1>";
}); 

Route::get('type',function () {
    return view('type');
});

Route::get('user-dash', function () {
    return view('user-dash');
});

Auth::routes();

//home ของจริง
Route::get('/', function () { return view('jobie'); })->name('jobie');

// Route สำหรับหน้าหลักหลังล็อกอิน
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route สำหรับแสดงข้อมูลบริษัท
Route::get('/company', [CompanyController::class, 'show'])->name('company.show');

// Route สำหรับหน้า findUser (แยกออกมา)
Route::get('/findUser', [UserController::class, 'index'])->name('findUser');

// Route สำหรับดูรายละเอียดผู้ใช้แต่ละคน
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
