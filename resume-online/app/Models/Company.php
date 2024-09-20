<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // กำหนดชื่อตารางถ้าไม่ใช่รูปแบบพหูพจน์
    protected $table = 'company';

    // กำหนด primary key ถ้าไม่ใช่ 'id'
    protected $primaryKey = 'compID';

    // ถ้าตารางไม่มีคอลัมน์ timestamps
    public $timestamps = false;

    // กำหนดฟิลด์ที่สามารถกรอกข้อมูลได้ (optional)
    protected $fillable = [
        'compName',
        'provinceID',
        'districtID',
        'subdistrictID',
        'companyTypeID',
        'compDescription',
        'compModel',
        'compAddress',
        'compPhone',
        'compEmail',
        'compWebsite',
        'compContactName',
        'compContactPosition',
        'userPassID'
    ];
}
