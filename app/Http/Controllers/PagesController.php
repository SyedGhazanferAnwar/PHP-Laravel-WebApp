<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages/home')->with('title','Home');
    }
    
    public function about(){
        return view('pages/about')->with('title','About Us');
    }
    public function services(){
        $info=array(
            'title'=>'Services',
            'myservices'=>['PHP','JAVA','Laravel']
        );
        return view('pages/services')->with($info);
    }
}
