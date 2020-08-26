<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $orders = Order::get()->take(6);
        $articles = Article::latest()->take(4)->get();

        return view('admin.index', compact('orders', 'articles'));
    }

}
