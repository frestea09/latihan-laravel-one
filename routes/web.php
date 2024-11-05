<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ganteng',function (){
    return "ganteng";
});
Route::get("/something", function(){
    return "ilman super ganteng dobo";
});
Route::get("/belajarrouter",function(){
    return view('ganteng',['name'=>'ganteng']);
});     
Route::get('/ganteng-dua', function(){
    return view('view-ganteng-tiga',["ganteng"=>"ilman teguh prasetya"]);
});

Route::get("/ganteng-tempat",function(){
    return View::first(['admin.view-ganteng-empat','admin'],["admin"=>["ilman"]]);
});