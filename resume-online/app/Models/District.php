<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model {
    protected $table = 'th_district';
    protected $primaryKey = 'districtID'; // กำหนด primary key เป็น 'districtID'
    public $timestamps = false; // กำหนดว่าไม่มี timestamps

    public function province() {
        return $this->belongsTo(Province::class, 'provinceID');
    }

    public function subdistricts() {
        return $this->hasMany(Subdistrict::class, 'districtID');
    }
}
