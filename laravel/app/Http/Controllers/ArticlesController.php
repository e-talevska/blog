<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function index()
    {
    $articles = Article::all();
// ['articles' => $articles]
        return view('articles.list', compact('articles'));
    }
    public function view($slug)
    {
        $article = Article::where("slug", "=",$slug)->first();

        if(is_null($article))
        {
            abort('404');
        }

        return view('articles.view', compact('article'));
    }
}
