<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model {
    protected $table = 'provinces';
    protected $primaryKey = 'id'; // กำหนด primary key เป็น 'provinceID'
    public $timestamps = false; // กำหนดว่าไม่มี timestamps

    public function districts() {
        return $this->hasMany(District::class, 'provinceID');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'useravailableprovince', 'provinceID', 'userID');
    }
}
