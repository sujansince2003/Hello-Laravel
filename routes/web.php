<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SumDiffController;

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

Route::controller(SumDiffController::class)->group(function()
{
    Route::get("/sum/{x}/{y}","sum")->whereNumber(["x","y"]);
    Route::get("/diff/{x}/{y}","diff")->whereNumber(["x","y"]);
});