<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        // $this->authorize('manage');

        $articles = Article::all();

        return view('admin.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view ('admin.articles.show', compact('article'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'code' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'amount' => 'required',
        ]);
// dd(request('active'));
        $article = Article::create([
            'title' => request('title'),
            'slug' => Str::slug(request('title'),'-'),
            'manufacturer' => request('manufacturer'),
            'description' => request('description'),
            'code' => request('code'),
            'category_id' => request('category_id'),
            'active' => !! request('active') ?: 0,
            'price' => mySqlPrice(request('price')),
            'amount' => request('amount'),
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
