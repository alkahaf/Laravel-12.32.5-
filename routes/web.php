<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
// Route::get('/home', function () {
//     return view('home');
// });
// Route::view('/welcome', 'welcome');

// Route::get('/about/{name}',function($name) {
//     // echo $name;
//     return view('about',['name'=> $name]);
// });


Route::get('user-home',[UserController::class,'userHome']);
Route::get('user-about',[UserController::class,'userAbout']);
