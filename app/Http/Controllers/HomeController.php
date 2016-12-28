<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class HomeController extends Controller
{
    public function index()
    {
        $postsrecentes = Posts::all();
        return view('inicio')->with(compact('postsrecentes'));
    }
}
