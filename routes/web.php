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

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/menu', function () {
    return view('menu');
})->name("menu");

Route::get('/coffee', function () {
    return view('coffee');
})->name("coffee");

Route::get('/non-coffee', function () {
    return view('non-coffee');
})->name("non-coffee");

Route::get('/desserts', function () {
    return view('desserts');
})->name("desserts");


Route::name('menu,')->group(function () {
    Route::get('/coffee', function () {
        return view("coffee");
})->name('coffee');
Route::get('/non-coffee', function () {
    return view('non-coffee');
})->name('non-coffee');
Route::get('/desserts', function () {
    return view('desserts');
})->name('desserts');
});







