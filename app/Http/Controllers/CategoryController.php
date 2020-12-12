<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function showCategories(){
        $categories = Category::all();
        return view("tables.categories", compact("categories"));
    }
}
