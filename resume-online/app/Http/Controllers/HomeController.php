<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}


// public function about(){
//     $name="โจโจ้"
//     $date="10 ตุลาคม 2566";
//     return view('about',compact('name','date'));
// }


