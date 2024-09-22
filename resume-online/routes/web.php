<?php

use App\Http\Middleware\companyMiddle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\userMiddle;

// กรณีผู้ใช้ระบุpathไม่ถูกต้อง แล้วจะตอบกลับไปยังฝั่งผู้ใช้ (client)
Route::fallback(function() {
    return "<h1>ไม่พบหน้าเว็บดังกล่าว</h1>";
});

Route::get('type',function () {
    return view('type');
});

Route::get('user-dash', function () {
    return view('user/user-dash');
});

Route::get('user-profile', function () {
    return view('user/user-profile');
});

Route::get('user-invite', function () {
    return view('user/user-invite');
});

Auth::routes();

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware([userMiddle::class])->group(function () {
    Route::get('/user', [UserController::class, 'show'])->name('user.show');
    Route::get('/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/update', [UserController::class, 'update'])->name('user.update');


});


Route::middleware([companyMiddle::class])->group(function () {
    Route::get('/company', [CompanyController::class, 'showCompany'])->name('company.show');
    Route::get('/company/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::post('/company/update/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::get('/company/{id}', [CompanyController::class, 'show'])->name('company.show');


});


//home ของจริง
//Route::get('/', function () { return view('jobie'); })->name('jobie');

Route::get('/jobie', function () { return view('jobie'); })->name('home');

Route::redirect('/home', '/jobie'); // redirect ไปยังหน้า home
Route::redirect('/', '/jobie'); // redirect ไปยังหน้า home


// Route สำหรับหน้าหลักหลังล็อกอิน
////Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route สำหรับแสดงข้อมูลบริษัท
//Route::get('/company', [CompanyController::class, 'show'])->name('company.show');

// Route สำหรับหน้า findUser (แยกออกมา)
Route::get('/findUser', [UserController::class, 'index'])->name('findUser');
Route::resource('users', UserController::class);

// Route สำหรับดูรายละเอียดผู้ใช้แต่ละคน
//Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

//Route::get('/login', function () { return view('/auth/login'); })->name('login');

Route::get('/register', function () { return view('/auth/register'); })->name('register');

Route::get('/register/type', function () { return view('/auth/type'); })->name('type');

//Route::get('/company/{id}', [CompanyController::class, 'show'])->name('company.show');

// new


