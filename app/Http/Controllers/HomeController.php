<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $featured = Article::latest()->take(8)->get();
        $articles = Article::latest()->paginate(12);

        return view('index', compact('featured','articles'));
    }
}
