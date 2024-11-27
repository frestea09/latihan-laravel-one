<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RangkumanTiga extends Controller
{
    //
    public function sayHelloThree(Request $request){
        return $request->input("data.name");
    }
}
