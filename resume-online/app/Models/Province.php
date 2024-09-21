<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model {
    protected $table = 'th_province';
    protected $primaryKey = 'provinceID'; // กำหนด primary key เป็น 'provinceID'
    public $timestamps = false; // กำหนดว่าไม่มี timestamps

    public function districts() {
        return $this->hasMany(District::class, 'provinceID');
    }
}
