<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MainViewController extends Controller
{
        public function home()
    {

        return view('home');
    }

    public function chat()
    {

        return view('chat');
    }

}