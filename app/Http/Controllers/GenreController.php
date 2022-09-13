<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\GenreFilm;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = GenreFilm::orderBy('id', 'desc')->get();
        return view('admin.genre.index', compact('genres'));
    }

    public function create()
    {
        // return view('admin.genre.create');
    }

    public function store(Request $request)
    {
        // validasi
        $validated = $request->validate([
            'kategori' => 'required|unique:genre_films',
        ]);
        $genres = new GenreFilm();
        $genres->kategori = $request->kategori;
        $genres->save();
        Alert::success('Done', 'Data berhasil dibuat')->autoClose(2000);
        return redirect()->route('genre.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kategori' => 'required|',
        ]);
        $genres = GenreFilm::findOrFail($id);
        $genres->kategori = $request->kategori;
        $genres->save();
        Alert::success('Done', 'Data berhasil diedit');
        return redirect()->route('genre.index');

    }

    public function destroy($id)
    {
        $genres = GenreFilm::findOrFail($id);
        $genres->delete();
        Alert::success('Done', 'Data berhasil diedit');
        return redirect()->route('genre.index');

    }
}
