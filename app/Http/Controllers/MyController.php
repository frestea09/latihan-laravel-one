<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function sayHelloWorld(){
        return "hello world";
    }
    public function request(Request $request, string $name){
        return $name;
    }
    public function sayHelloLemparNama(){
        return view("/admin/test-tiga",["name"=>"ilman"]);
    }
    public function getRequestSayHello(Request $request){
        $temp =$request->input("name");
        return "hello$temp";
    }
}
