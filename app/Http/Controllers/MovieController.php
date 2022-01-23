<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //Movies

    public function index(){

        $movies = Movie::all();
        dump($movies);

        return view('movies', compact('movies'));
    }
}
