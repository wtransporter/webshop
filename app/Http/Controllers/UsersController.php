<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	return view('index');
    }
}
