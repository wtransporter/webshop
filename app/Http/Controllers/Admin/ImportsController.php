<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\BSWebService;

class ImportsController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = NULL;
        return view('admin.imports.index', compact('articles'));
    }

    /**
     * Method for creating a new order.
     *
     * @param BSWebService $service
     * 
     * @return \Illuminate\Http\Response
     */
    public function create(BSWebService $service)
    {       
        try {
            $articles = $service->getItems();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }

        try {
            Article::import($articles);
        } catch (\PDOException $e) {
			return redirect()->back()->withErrors(
				"Error importing data: ". $e->errorInfo[2]
			);
        }

        return view('admin.imports.index', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
