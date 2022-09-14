<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\GenreFilm;
use Illuminate\Http\Request;
use Validator;

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
        $rules = [
            'kategori' => 'required|unique:genre_films',
        ];

        $messages = [
            'kategori.required' => 'Kategori harus di isi!',
            'kategori.unique' => 'kategori tidak boleh sama!',
        ];

        // validasi
        $validation = Validator::make($request->all(), $rules, $messages);

        // $validated = $request->validate([
        //     'kategori' => 'required|unique:genre_films',
        // ]);

        if ($validation->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validation)->withInput();
        }

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
