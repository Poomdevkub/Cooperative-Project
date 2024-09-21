<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user'; // กำหนดชื่อตารางเป็น 'user'
    protected $primaryKey = 'userID'; // กำหนด primary key เป็น 'userID'
    public $timestamps = false; // กำหนดว่าไม่มี timestamps

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userFirstname',
        'userSurname',
        'userEmail',
        'userDatebirth',
        'userType',
        'userSex',
        'userNationality',
        'userReligion',
        'userWeight',
        'userHeight',
        'userPhoneNumber',
        'userPostcode',
        'districtID',
        'provinceID',
        'subdistrictID',
        'userRegisdate',
        'userResume',
        'userLineID',
        'userPic',
        'userStatusShow',
        'userPosition',
        'userPassID',
    ];

    // ความสัมพันธ์กับตารางอื่น ๆ (ถ้ามี)
}
