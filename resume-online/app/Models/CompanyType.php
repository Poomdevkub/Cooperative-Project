<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{
    use HasFactory;

    protected $table = 'companytype';
    protected $primaryKey = 'companyTypeID';
    public $timestamps = false;

    protected $fillable = [
        'companyTypeName',
    ];

    public function companies()
    {
        return $this->hasMany(Company::class, 'companyTypeID');
    }
}
