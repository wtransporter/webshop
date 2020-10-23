<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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
        $articles = Article::all();

        return view('admin.articles.index', compact('articles'));
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

        $attributes['active'] = !! $request->get('active') ? 1 : 0;

        $article->update($attributes);

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
        $article = Article::create([
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('title'),'-'),
            'manufacturer' => $request->get('manufacturer'),
            'description' => $request->get('description'),
            'code' => $request->get('code'),
            'category_id' => $request->get('category_id'),
            'active' => !! $request->get('active') ? 1 : 0,
            'price' => mySqlPrice($request->get('price')),
            'amount' => $request->get('amount'),
            'tax' => 'S1'
        ]);

        return redirect()->back()->with('flash', 'Article has been saved !');
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

        return redirect()->back();
    }

}
