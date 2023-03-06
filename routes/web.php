<?php

use Illuminate\Support\Facades\Route;

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

// Route::get("/demo",function(){
//     return view('demo');
// });

// Route::get("/demo/{name}",function($name){
//     echo $name;
// });

// Route::get("/demo/{name}/{id?}",function($name,$id = null){
//     echo $name . " ";
//     echo $id;
    
// });

// Route::get("/demo/{name?}/{id?}",function($name=null,$id = null){
//     // The compact() function creates an array from variables and their values
//    $data = compact('name','id');
//    //    print_r($data);
//    return view('demo')->with($data);

// });

Route::get("/demo/{name?}/{id?}",function($name=null,$id = null){
    // The compact() function creates an array from variables and their values
    $text =  "<h1>this is text </h1>";
   $data = compact('name','id','text');
   //    print_r($data);
   return view('demo')->with($data);

});



// Route::post("/demo",function(){
//        echo "this is test file";
// });
