<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Work extends Model
{
    use HasFactory;





    public static function createWork($id)
    {
        
        DB::insert('INSERT INTO workfinder ( userID) VALUES (?)',[$id]);
        $results = DB::table('workfinder')->where( 'userID' , $id)->first();
        DB::insert('INSERT INTO workcontact (workfinderID) VALUES (?);',[$results->workfinderID]);
        DB::insert('INSERT INTO workaddress (workfinderID) VALUES (?)',[$results->workfinderID]);
        
    }
    public static function findWorkById($id)
    {
        return DB::table('workfinder')->where( 'userID' , $id)->first();

    }

}

