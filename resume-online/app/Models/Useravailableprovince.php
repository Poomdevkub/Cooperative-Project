<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Useravailableprovince extends Model
{
    protected $table = 'useravailableprovince';
    protected $primaryKey = 'userAvailableProvinceID';

    // ความสัมพันธ์กับ Province
    public function province()
    {
        return $this->belongsTo(Province::class, 'provinceID', 'id');
    }
}
