<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;

class ArticlesController extends Controller
{
    /**
     * Display given article.
     *
     * @param  Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Article $article)
    {
        return view('articles.show', compact('article'));
    }
}
