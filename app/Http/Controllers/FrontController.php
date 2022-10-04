<?php

namespace App\Http\Controllers;

use App\Models\GenreFilm;
use App\Models\Movie;

class FrontController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('id', 'desc')->take(3)->get();
        // dd($movies);
        $allMovies = Movie::orderBy('id', 'desc')->get();
        $genres = GenreFilm::all();
        return view('index', compact('movies', 'genres', 'allMovies'));
    }

    public function movies()
    {
        $movies = Movie::orderBy('id', 'desc')->get();
        return view('movies', compact('movies'));
    }
}
