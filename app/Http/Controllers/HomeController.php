<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        $ids = Category::all()->pluck('id');
        return view('index', [
            'featured' => Article::whereHas('categories', function ($query) use ($ids) {
                    $query->whereIn('categories.id', $ids);
                })->activeArticles()->latest()->take(8),
            'articles' => Article::whereHas('categories', function ($query) use ($ids) {
                    $query->whereIn('categories.id', $ids);
                })->activeArticles()->paginate(12)
        ]);
    }
}
