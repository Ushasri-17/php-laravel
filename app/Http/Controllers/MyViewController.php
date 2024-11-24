<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyViewController extends Controller
{
    public function myview()
    {
        return view('myview');
    }
}
