<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $name='Teodora';
        $lastname='Chakovska';
        $people=[
            'aaa', 'bbb', 'ccc'
        ];
       // $people=[];
     //  return view('pages.about')->with('name', $name);
        //mozi i pages/about
       return view('pages.about', ['name'=>$name,'lastName'=>$lastname, 'people'=>$people]);//[] dif na array
    }

    public function home()
    {
        return view('pages.home');
    }
}
