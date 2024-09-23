<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public static function getProvince()
    {
        return DB::table('provinces')->get();
    }
    public static function getDistrictbyProvinceName($id)
    {
        return DB::table('districts')->where('province_id')->get();
    }
}
