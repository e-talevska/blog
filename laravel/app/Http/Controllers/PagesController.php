<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about(){
        $name = "jovan ";
        $last_name = 'jaulevski';
        $people = [
            'aaa',
            'bbb',
            'ccc'
        ];

//        return view('pages.about')->with('name',$name);

       return view('pages.about',
       array('name' =>$name ,
             'lastName' =>$last_name,
             'people'=>$people)
        );
    }

    public function contact(){
        return view ('pages.contact');
    }
}
