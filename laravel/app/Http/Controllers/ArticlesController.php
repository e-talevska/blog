<?php

namespace App\Http\Controllers;

use App\Article;

use App\Http\Requests;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ArticlesController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'view']]);//proveruva dali e logiran korisnikot
        $this->middleware('isauthor', ['except' => ['index', 'view']]);

    }
    public function index() {
        $articles = Article::published()->latest('published_at')->get();
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
        $tags = Tag::lists('name', 'id');
        return view('articles.create', ['tags'=> $tags]);
    }

    public function store(Requests\CreateArticleRequest $request){
//        $this->validate([
//            'title' => 'required|min:3',
//            'slug' => 'required',
//            'body' => 'required',
//            'published_at' => 'required|date_format:"m/d/Y H:i A"',
//        ]);
//var_dump($request->all());exit;
        //procitaj se od formata
        $input = $request->all();
        //creiraj nov artikl objekt
        $article=new Article($input);
        //toj objekt dodaj go na listata artikli
        //na avtenticiraniot user
        Auth::user()->articles()->save($article);

        $article->tags()->attach($request->get('tags'));
        //attach sluzi za dodavanje novi tagovi

        Session::flash("flash_message", "Article created successfully");
        Session::flash("status", "success");

       // $input['user_id'] = 1;

      //  $article = new Article();
      //  $article->create($input);
        return redirect('/articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id);

        return view('articles.edit',['article' => $article]);
    }

    public function update($id, Requests\CreateArticleRequest $request){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('/articles');
    }
}
