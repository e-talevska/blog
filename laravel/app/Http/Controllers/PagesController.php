<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class PagesController extends Controller
{
    public function about(){
        $name='sofija';
        $last_name='shutarova';
        $people=[
            'aaa',
            'ccc',
            'rrr'
        ];

        //$people=[];
      //  return view('pages.about')->with('name',$name)->with('last_name',$last_name);
        return view('pages/about',['name'=>$name,'last_name'=>$last_name,'people'=>$people]);

    }

    public function contact(){
        return view('pages.contact');
    }
}


