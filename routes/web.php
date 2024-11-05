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
// Route::get('/ganteng',function (){
//     return "ganteng";
// });
// Route::get("/something", function(){
//     return "ilman super ganteng dobo";
// });
// Route::get("/belajarrouter",function(){
//     return view('ganteng',['name'=>'ganteng']);
// });     
// Route::get('/ganteng-dua', function(){
//     return view('view-ganteng-tiga',["ganteng"=>"ilman teguh prasetya"]);
// });

Route::get("/ganteng-tempat",function(){
    return View::first(['admin.view-ganteng-empat','admin'],["admin"=>["ilman"]]);
});
Route::get("/pzn",function(){
    return "ganteng banget";
});
Route::redirect("/youtube","/pzn");

Route::fallback(function(){
    return "Tidak Ada";});

Route::get("/test-view",function(){
    return view('test-view',['name'=>"ilman teguh prasetya"]);
});
Route::view("/test-view-dua","test-view",["name"=>"ilman teguh prasetya"]);
Route::view("/test-view-tiga","admin/test-dua",["name"=> "ganteng"]);
Route::get("/test-view-product/{productId}", function($productId){
    return "Prouct Id $productId";
})->name("test-view-product.detail");
Route::get("/test-view-regex/{productId}",function($productId){
    return "Product Id $productId";
})->where("productId","[0-9]+");
Route::get("/test-view-rext/{productId?}", function(string $product="404"){
    return "Product Id $product";
});
Route::get("/info-link",function():string{
    $inforOfUrl = route("test-view-product.detail",["productId"=>12]);
    return "$inforOfUrl";
});
//controller
Route::get("/mycontroller",[\App\Http\Controllers\MyController::class,"sayHelloWorld"])->name("production.mycontroller");
Route::get('/mycontroller/inputnama',[\App\Http\Controllers\MyController::class,"sayHelloLemparNama"]);
Route::get("/mycontroller/request/{name}", [\App\Http\Controllers\MyController::class,"request"])->name("product.mycontroller.request");
Route::post("/mycontrol/belajar/post", [\App\Http\Controllers\MyController::class,"getRequestSayHello"]);