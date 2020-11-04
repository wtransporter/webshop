<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesActivationController extends Controller
{
	
	public function update(Article $article)
	{

		if (request()->boolean('active')) {
			$article->activate();
		} else {
			$article->deactivate();
		}

		return response([], 204);

	}
}
