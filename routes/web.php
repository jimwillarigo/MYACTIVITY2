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

Route::get('/logo', function () {
    return view('logo');
})->name("logo");

Route::get('/menu', function () {
    return view('menu');
})->name("menu");

Route::get('/Coffee', function () {
    return view('Coffee');
})->name("Coffee");

Route::get('/Non-Coffee', function () {
    return view('Non-Coffee');
})->name("Non-Coffee");

Route::get('/Desserts', function () {
    return view('Desserts');
})->name("Desserts");

