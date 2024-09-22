<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyFollowing extends Model
{
    protected $table = 'companyfollowing'; // ตั้งชื่อโต๊ะ
    protected $primaryKey = 'companyFollowingID'; // ตั้ง Primary Key

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


