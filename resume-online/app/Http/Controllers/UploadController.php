<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;


class UploadController extends UserController
{
    //

    public function uploadProfile(){

        return view('findUser.userUploadProfile');
    }
    public function uploaingProfile(Request $request){
        $a = new UserController();
        
        $path = $request->file('file')->store('public');
        $filenameArray = explode('/',$path);
        $filename = $filenameArray[1];

        Work::uploadProfile(Auth()->user()->id,$filename);
    
        return $a->show();
    }
    public function uploadResume(){

        return view('findUser.userUploadResume');
    }

    public function uploaingResume(Request $request){
        $a = new UserController();
        
        $path = $request->file('file')->store('public/resume');
        $filenameArray = explode('/',$path);
        $filename = $filenameArray[2];

        $us = Work::findWorkById(Auth()->user()->id);


        Work::uploadResume($us->workfinderID,$filename);
    
        return $a->show();
    }
}
