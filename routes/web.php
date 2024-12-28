<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about",function(){
    return view("about");
});

Route::get("/cars",[CarController::class,"index"]);

// using group routes by controller

Route::controller(CarController::class)->group(function()
{
    Route::get("/users","index");
    Route::get("/users/{id}","showid");
   
});