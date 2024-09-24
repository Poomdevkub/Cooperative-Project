<?php

use App\Http\Middleware\companyMiddle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Middleware\userMiddle;
use App\Http\Controllers\CompanyFollowingController;
use App\Http\Controllers\FindUserController;

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
    Route::get('/uploadResume', [UploadController::class, 'uploadResume'])->name('user.uploadR');
    Route::post('/uploadResume', [UploadController::class, 'uploaingResume'])->name('user.uploadResume');

});


Route::middleware([companyMiddle::class])->group(function () {
    Route::get('/company', [CompanyController::class, 'showCompany'])->name('company.show');
    Route::get('/company/edit', [CompanyController::class, 'edit'])->name('company.edit');
    Route::post('/company/update/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::get('/company/{id}', [CompanyController::class, 'show'])->name('company.show');
    Route::get('/user/{id}', [UserController::class, 'getByid'])->name('user.getByid');
    Route::delete('/companyfollowing/{id}', [CompanyFollowingController::class, 'destroy'])->name('companyfollowing.destroy');
    Route::get('/companyfollowing', [CompanyFollowingController::class, 'index'])->middleware('auth')->name('companyfollowing.index');
    Route::get('/findUser', [FindUserController::class, 'index'])->name('findUser');
    Route::post('/search', [FindUserController::class, 'search'])->name('searchUser');

});

Route::get('/uploadProfile', [UploadController::class, 'uploadProfile'])->middleware(['auth'])->name('user.uploadP');
Route::post('/uploadProfile', [UploadController::class, 'uploaingProfile'])->middleware(['auth'])->name('user.uploadProfile');


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
//Route::get('/findUser', [UserController::class, 'index'])->name('findUser');
Route::resource('users', UserController::class);

// Route สำหรับดูรายละเอียดผู้ใช้แต่ละคน
//Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

//Route::get('/login', function () { return view('/auth/login'); })->name('login');

//Route::get('/register', function () { return view('/auth/register'); })->name('register');

Route::get('/register/type', function () { return view('/auth/type'); })->name('type');

//Route::get('/company/{id}', [CompanyController::class, 'show'])->name('company.show');

// new
Route::post('/follow-user/{id}', [UserController::class, 'followUser'])->name('followUser');
Route::post('/unfollow-user/{userId}', [UserController::class, 'unfollowUser'])->name('unfollowUser');



// Route::get('/user/{id}', function ($id) {
//     // หน้ารายละเอียดของผู้ใช้ สามารถเขียน logic เพิ่มเติมที่นี่
//     return "User ID: " . $id;
// });



