<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {   
        if (request()->expectsJson()) {
            return Category::with('child')->get();
        }
        
        return view('admin.categories.index');
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->validated());

        return response()->json($category);
    }
}
