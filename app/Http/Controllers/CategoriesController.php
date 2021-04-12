<?php

namespace App\Http\Controllers;

use App\Category;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }
}
