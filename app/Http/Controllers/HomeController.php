<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $featured = Article::activeArticles()->latest()->take(8)->get();
        $articles = Article::activeArticles()->latest()->paginate(12);

        return view('index', compact('featured','articles'));
    }
}
