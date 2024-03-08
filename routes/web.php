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











// Include necessary classes and dependencies
require_once 'Router.php'; // Assuming you have a Router class
require_once 'TaskController.php'; // Assuming you have a TaskController class

// Instantiate the router
$router = new Router();




// Define routes for TaskController

route::resource(name:'tasks', controler:'TaskCotroller')->middleware(['auth']);
route::resource(name:'users', controler:'UserCotroller')->middleware(['auth']);


route::group(['middleware'=> 'auth'], function(){;
    route::resource(name:'tasks', controler:'TaskController');

    route::group(['middleware'=>'admin'],function() {;
           route::resource(name:'users', controler:'UserController');

        });
});










// Run the router
$router->dispatch();
route::get(uri:'tasks', 'TaskController@index');
route::get(uri:'tasks/create', 'TaskController@create');
route::post(uri:'tasks', 'TaskController@store');
route::get(uri:'tasks/{id}', 'TaskController@show');
route::get(uri:'tasks/edit/{id}', 'TaskController@edit');
route::put(uri:'tasks/{id}', 'TaskController@update');
route::delete(uri:'tasks/{id}', 'TaskController@destroy');
