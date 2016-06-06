<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $name = "Dejan";
        $last_name = "Jankov";
        $people = [
            'aaaa',
            'bbbbb',
            'ccccc'
        ];

        $people = [];
        return view('pages/about', array('name' => $name, 'last_name' => $last_name , 'people'=> $people));
    }
    public function contact()
    {
        return view('pages/contact');
    }
}
