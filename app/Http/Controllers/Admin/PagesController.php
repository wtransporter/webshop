<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }
    
    public function index()
    {
        return view('admin.index');
    }
}
