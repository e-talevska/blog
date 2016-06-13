<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about(){
        $name = "Emilija";
        $last_name = "Talevska";
        $people = [
            'aaa',
            'bbb',
            'ccc'
        ];

//        $people = [];
//        return view('pages/about')
//          ->with('name',$name)
//          ->with('last_name',$last_name)
//          ->with('people',$people);
        return view('pages/about',
            array(
                'name' => $name,
                'lastName' => $last_name,
                'people' => $people)
        );
    }

    public function contact(){
        return view('pages/contact');
    }
}
