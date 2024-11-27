<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RangkumanSatu extends Controller
{
    //
    public function sayHello(){
        return "hello world";
    }
    public function productDetail(string $name):string{
        return "Name : $name";
    }
    public function classViewDetail(){
        return view("admin/dacmtatemp",["name"=>"ilman"]);
    }
    public function belajarViewDetail(){
        return view("belajarview",["name"=> "ilman"]);
    }
}
