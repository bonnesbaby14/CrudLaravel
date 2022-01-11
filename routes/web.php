<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// solo para laravel menor a 8
// Route::get('/', "UserController@index");
// Route::post("users","UserController@store")->name("users.store");
// Route::delete("users/{user}","UserController@destroy")->name("users.destroy");


// para laravel 8 
Route::get('/', [UserController::class,"index"]);
Route::post("users",[UserController::class,"store"])->name("users.store");
Route::delete("users/{user}",[UserController::class,"destroy"])->name("users.destroy");