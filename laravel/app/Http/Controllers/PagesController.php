<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about(){
        $name = "Robert";
            $Last_name = "Jovanovski";
        $people = [
            'aaa',
            'bbb',
            'ccc'
        ];

//        $people = [];  (Ova ako go ima ke go pecati prazno)

//        $name = "Robert_Jovanovski";
//        return view ('pages/about')->with('name', $name);
        return view ('pages/about',
            array(
                'name' => $name,
                'last_name' => $Last_name,
                'people' => $people)
        );

    }
    public function contact(){
        return view ('pages/contact');
    }
}
