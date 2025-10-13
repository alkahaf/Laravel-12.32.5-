<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
// Route::view('/welcome', 'welcome');

// Route::get('/about/{name}',function($name) {
//     // echo $name;
//     return view('about',['name'=> $name]);
// });

Route::get('user',[UserController::class,'getUser']);
Route::get('about',[UserController::class,'getGafoor']);
Route::get('user/{name}',[UserController::class,'getUserName']);
Route::get(' admin',[UserController::class,'adminLogin']);
Route::get(' displayArray',[UserController::class,'getArray']);