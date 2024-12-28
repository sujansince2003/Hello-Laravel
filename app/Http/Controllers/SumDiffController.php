<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumDiffController extends Controller
{
    public function Sum($x,$y)
{
    return "the sum is " . ($x+$y);
}

public function diff($x,$y){
    return " the diff is " . ($x-$y);
}
}
