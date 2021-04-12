<?php

namespace App\Http\Controllers;

use App\Article;

class HomeController extends Controller
{

    public function index()
    {
        return view('index', [
            'featured' => Article::activeArticles()->latest()->take(8)->get(),
            'articles' => Article::activeArticles()->latest()->paginate(12)
        ]);
    }
}
