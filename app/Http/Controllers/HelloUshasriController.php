<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloUshasriController extends Controller
{
    public function index()
    {
        return 'Hello, Ushasri';
    }

    public function greet($name)
    {
        return 'Hii, ' . $name . '!';
    }
}