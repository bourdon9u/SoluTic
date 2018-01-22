<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $title = "Solutic";
        return view('site/homepage')->with('title',$title);
    }


    
}
