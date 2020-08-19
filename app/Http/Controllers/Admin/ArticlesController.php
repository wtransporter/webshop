<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function __condtruct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $articles = Article::all();

        return view('admin.index', compact('articles'));
    }
}
