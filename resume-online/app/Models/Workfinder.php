<?php
/*
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workfinder extends Model
{
    protected $table = 'workfinder'; // ตั้งชื่อโต๊ะให้ตรงกับที่ในฐานข้อมูล
    protected $primaryKey = 'workfinderID'; // ตั้ง Primary Key
    public function workfinder()
{
    return $this->belongsTo(Workfinder::class, 'workfinderID'); // เชื่อมโยงกับ Model Workfinder
}
}
*/


namespace App\Models;

use App\Models\Workcontact;
use Illuminate\Database\Eloquent\Model;

class Workfinder extends Model
{
    protected $table = 'workfinder'; // ตั้งชื่อ table ให้ตรงกับในฐานข้อมูล
    protected $primaryKey = 'workfinderID'; // ตั้ง Primary Key

    // ความสัมพันธ์กับ workcontact (หนึ่งต่อหนึ่ง)
    public function workcontact()
    {
        return $this->hasOne(Workcontact::class, 'workfinderID', 'workfinderID');
    }

    // ความสัมพันธ์กับ useravailableprovince (หนึ่งต่อหนึ่ง)
    public function useravailableprovince()
    {
        return $this->hasOne(Useravailableprovince::class, 'workfinderID', 'workfinderID');
    }
}

