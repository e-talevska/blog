<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ArticlesController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=> ['index','view']]);
        $this->middleware('ifauthor',['except'=>['index','view']]);
    }

    public function index(){
        $articles=Article::published()->latest('published_at')->get();
        return view('articles.list',compact('articles'));
    }

    public function view($slug){
        $article=Article::where("slug","=","$slug")->first();
        if(is_null($article)){
            abort('404');
        }
        return view('articles.view',compact('article'));
    }

    public function create(){
        $tags=Tag::lists('name','id');
        return view('articles.create',['tags'=>$tags]);
    }

    public function store(Requests\CreateArticleRequest $request){
       //procitaj se od formata
        $input=$request->all();
        $article = new Article($input);
        //kreiraj nov Article object
        Auth::user()->articles()->save($article);
        //toj object dodaj go na listata artikli
        //na avtenticiraniot user

        $article->tags()->attach($request->get('tags_list'));

        Session::flash("flash_message","Article created successfully");
        Session::flash("status","success");

        return redirect('/articles');
    }

    public function edit($id){
        $article=Article::findOrFail($id);
        $tags=Tag::lists('name','id');
        return view('articles.edit',['article'=>$article,'tags'=>$tags]);
    }

    public function update($id,Requests\CreateArticleRequest $request){

    //upload the image
        $destinationFolder="uploads";
        $extension=Input::file("featured_image")->getClientOriginalExtension();
        $fileName=time().'.'.$extension; //renaming image
        Input::file('featured_image')->move($destinationFolder,$fileName); //uploading file

        $update=$request->all();
        $update['featured_image']=$fileName;
        $article=Article::findOrFail($id);
        $article->update($update);
        $tags_list=$request->get('tags_list');
        if(isset($tags_list)) {
            $article->tags()->sync($tags_list);
        }



        return redirect('/articles');
    }
}
