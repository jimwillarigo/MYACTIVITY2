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

// Route::get('/account/{name?}', function($name = "404"){
//     if($name == "404"){
//         return view("404");
//     }else{
//         return view("account");
//     }
// })->name("account-name");

Route::get('/home', function () {
    return view('home');
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/service', function () {
    return view('service');
})->name("service");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/style', function () {
    return view('style');
})->name("cstyle");

Route::get('/department', function () {
    return view('department');
})->name("department");

Route::get('/bsit 1', function () {
    return view('bsit 1');
})->name("bsit 1");

Route::get('/bsit 2', function () {
    return view('bsit 2');
})->name("bsit 2");

Route::get('/bsit 3', function () {
    return view('bsit 3');
})->name("bsit 3");

Route::get('/bsit 4', function () {
    return view('bsit 3');
})->name("bsit 4");