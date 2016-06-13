<?php

namespace App\Http\Controllers;

use App\Article;

use App\Http\Requests;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::all();
        $name = "Emilija";
        //['articles' => $articles, 'name' => $name]
        return view('articles.list', ['articles' => $articles]);
    }

    public function view($slug){
        $article = Article::where("slug", "=", $slug)->first();

        if(is_null($article)) {
            abort('404');
        }

        return view('articles.view', compact('article'));
    }

    public function create() {
        return view('articles.create');
    }

    public function store(Request $request){
        $input = $request->all();
//        var_dump($input);exit;
        $article = new Article();
        $article->create($input);
        return redirect('/articles');
    }
}
