<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RangkumanDua extends Controller
{
    //
    public function sayHello(){
        return "hello world";
    }
    public function duaPage(){
        return view('duapage');
    }
    public function dataduapage(){
        return view('duapagedata',["data"=>"ganteng"]);
    }
    public function dataduapageDua(Request $request){
        $name = $request->input("data.name");
        return "$name";
    }
}
