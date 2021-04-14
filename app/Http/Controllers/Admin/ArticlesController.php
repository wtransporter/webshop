<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleUpdateRequest;

class ArticlesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $articles = Article::with('categories')->paginate(10);

        if (request()->expectsJson()) {
            return $articles;
        }

        return view('admin.articles.index');
    }

    public function edit(Article $article)
    {
        return view ('admin.articles.edit', compact('article'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Update given article.
     * 
     * @param Article $article
     * @param ArticleUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Article $article, ArticleUpdateRequest $request)
    {
        $attributes = $request->validated();
        unset($attributes['categories']);

        $article->update($attributes);
        $article->categories()->sync($request->categories);
        
        return redirect($article->adminPath().'/edit')->with('flash', 'Changes successfully stored !');
    }

    /**
     * Store the incoming article.
     * 
     * @param ArticleUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ArticleUpdateRequest $request)
    {
        Article::create($request->validated());

        return redirect()->back()->with('flash', 'Proizvod je uspešno sačuvan !');
    }

    /**
    * Delete the given article.
    *
    * @param Article $article
    * @return \Illuminate\Http\RedirectResponse
    */
    public function destroy(Article $article)
    {
        $article->delete();
        
        if (request()->expectsJson()) {
            return response(['status' => 'Proizvod je obrisan.']);
        }
    }

}
