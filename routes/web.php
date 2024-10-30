<?php

use App\Http\Controllers\UserAppController;
use App\Models\UserApp;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Email;

Route::get("test", function () {
    Mail::to("bacs200018@gmail.com")->send(Mailable::class("Hello"));
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('about/', function () {
    return view('about');
});
 
Route::get('contact/', function () {
    return view('contact');
});


Route::controller(UserAppController::class)-> group(function () {
    //All
    Route::get('users_app/', "showAll");
    //Get with pagination, example:
    //http://127.0.0.1:8000/users_app_pagination?page=2
    Route::get('users_app_pagination/',"show");

    Route::post('/user_app', "create");

    Route::patch('/user_app', "edit");

    Route::delete('/user_app', "delete");
})->middleware(["auth", "verified"])->name("contact/");

