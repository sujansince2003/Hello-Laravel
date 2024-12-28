<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller{
    public function index()
    {
        $cars = ["d","ddas","fds"];
        return view("welcome");
    }
    public function showid($id)
    {
        return "id is " . $id;
    }

}

     
