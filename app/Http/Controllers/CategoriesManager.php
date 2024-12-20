<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\category;

class CategoriesManager extends Controller
{
    public function Category()
    {
        $categories = Category::all();
        return view("categories", compact("categories"));
    }
}
