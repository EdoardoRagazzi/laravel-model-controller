<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicController extends Controller
{
    public function comics(){

         //Passing 2 Parameters nav & comics both from two oop 
         //senza uso di compact
        // $comics = config('comics');
        // $nav = config('nav');

        // return view('comics',[
        //         'comics' => $comics,
        //         'nav'=>$nav
        //     ]);

        
        $comics = Comic::all();

        $nav = config('nav');
        // dd($comics);
        $comic= compact('comics');

        return view('comics',[ 'comics' => $comic, 'nav'=> $nav];
       
    }
}
