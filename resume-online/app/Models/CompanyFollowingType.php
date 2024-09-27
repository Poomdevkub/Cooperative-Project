<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyFollowingType extends Model
{
    protected $table = 'companyfollowingtype'; // ตั้งชื่อโต๊ะให้ตรงกับที่ในฐานข้อมูล
    protected $primaryKey = 'companyFollowingTypeID'; // ตั้ง Primary Key

    public function companyFollowingType()
{
    return $this->belongsTo(CompanyFollowingType::class, 'companyFollowingTypeID'); // เชื่อมโยงกับ Model CompanyFollowingType
}

public function companyFollowings()
{
    return $this->hasMany(CompanyFollowing::class, 'companyFollowingTypeID');
}
}


