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
    public static function findAddressById($id)
    {
        return DB::table('workaddress')->where( 'workfinderID' , $id)->first();

    }
    public static function findContactById($id)
    {
        return DB::table('workcontact')->where( 'workfinderID' , $id)->first();

    }
    
    public static function updateWork($id,$data)  {
        $w =  DB::table('workfinder')->where( 'userID' , $id)->first();
        $a =  DB::table('workaddress')->where( 'workfinderID' , $w->workfinderID)->first();
        $c =  DB::table('workcontact')->where( 'workfinderID' , $w->workfinderID)->first();


        DB::table('workfinder')->where( 'userID' , $id)->update([
            'firstname'=> $data->firstname,
            'surname'=> $data->surname,
            'sex'=> $data->sex,
            'nation'=> $data->nation,
            'religion'=> $data->religion,
            'phone'=> $data->phone,

        ]);
        
        DB::table('workcontact')->where( 'workfinderID' , $w->workfinderID)->update(['position' => $data->position]);
        
    }

}

