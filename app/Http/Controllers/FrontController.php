<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\GenreFilm;
use App\Models\Movie;
use App\Models\Reviewer;
use Illuminate\Http\Request;

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
        $genres = GenreFilm::all();
        $movies = Movie::orderBy('id', 'desc')->get();
        return view('movies', compact('movies', 'genres'));
    }

    public function singleMovie($id)
    {
        $movie = Movie::findOrFail($id);
        $review = Reviewer::select('reviewers.nama', 'reviewers.email', 'reviewers.komentar')
            ->join('movies', 'movies.id', '=', 'reviewers.id_movie')
            ->where('reviewers.id_movie', $id)
            ->get();
        return view('singleMovie', compact('movie', 'review'));
    }

    public function sendReview(Request $request)
    {
        $review = new Reviewer();
        $review->nama = $request->nama;
        $review->email = $request->email;
        $review->komentar = $request->komentar;
        $review->id_movie = $request->id_movie;
        $review->save();
        Alert::success('Terima Kasih', 'Tanggapan anda sudah kami terima')->autoClose(3000);
        return redirect()->back();
    }
}
