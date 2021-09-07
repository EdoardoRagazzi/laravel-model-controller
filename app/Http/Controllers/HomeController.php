<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nav= config('nav');
        $data = ['nav'=> $nav];
        return view('home',$data);
    }
    
}
