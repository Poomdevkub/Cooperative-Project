<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyFollowing extends Model
{
    protected $table = 'companyfollowing'; // ตั้งชื่อตาราง
    protected $primaryKey = 'companyFollowingID'; // ตั้ง Primary Key

    // ฟิลด์ที่อนุญาตให้กรอกข้อมูลได้
    protected $fillable = [
        'compID',
        'workfinderID',
        'companyFollowingTypeID'
    ];

    public $timestamps = false; // ปิดการใช้งาน timestamps

    public function company()
    {
        return $this->belongsTo(Company::class, 'compID'); // เชื่อมกับ Model Company
    }

    public function companyFollowingType()
    {
        return $this->belongsTo(CompanyFollowingType::class, 'companyFollowingTypeID'); // เชื่อมกับ Model CompanyFollowingType
    }

    public function workfinder()
    {
        return $this->belongsTo(Workfinder::class, 'workfinderID'); // เชื่อมกับ Model Workfinder
    }

}
