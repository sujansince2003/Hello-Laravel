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