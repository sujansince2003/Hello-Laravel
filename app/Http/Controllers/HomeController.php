<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View ;


class HomeController extends Controller
{
    public function index()
    {
        if(View::exists("testcondition"))
        {
            return View::make("testcondition");
        }
        else{
            return "View not available";
        }
        // return "hello home";
        // return View::make("about",["name"=>"sujan khatri"]);
    }
}
