<?php

namespace App\Http\Controllers;

use App\Page;

class PagesController extends Controller
{
    public function show(Page $page)
    {
        return view('pages.pages', compact('page'));
    }
}
