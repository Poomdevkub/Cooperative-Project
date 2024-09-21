<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model {
    protected $table = 'th_subdistrict';
    protected $primaryKey = 'subdistrictID'; // กำหนด primary key เป็น 'subdistrictID'
    public $timestamps = false; // กำหนดว่าไม่มี timestamps

    public function district() {
        return $this->belongsTo(District::class, 'districtID');
    }

    public function province() {
        return $this->belongsTo(Province::class, 'provinceID');
    }
}
