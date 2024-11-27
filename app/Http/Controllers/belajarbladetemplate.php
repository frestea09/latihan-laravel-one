<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class belajarbladetemplate extends Controller
{
    //
    public function index(){
        return view("belajarviewsatu",["name"=>"ilman"]);
    }
    public function hooby(){
        return view("belajarviewsatu", data : ["name"=>"ilman","hobby" => ["berenang"]]);
    }
    public function issetEmpty(){
        return view("BelajarIssetEmpty", ["name"=>"ilman"]);
    }
    public function belajarForeach(){
        return view("belajarforeach", ["data"=> ["ilman", "teguh","prasetya"]]);
    }
    public function belajarWhile(){
        return view("belajarwhile", ["data"=> ["23","23","23"],"iteration"=>0]);
    }
}
