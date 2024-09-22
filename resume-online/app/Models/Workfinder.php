<?php

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

