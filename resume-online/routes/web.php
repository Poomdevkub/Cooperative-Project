<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


