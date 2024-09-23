<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workcontact extends Model
{
    use HasFactory;

    protected $table = 'workcontact';
    protected $primaryKey = 'workcontactID';
}
