<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sample tahun
        $tahun = new \App\Models\TahunRilis();
        $tahun->tahun = "2019";
        $tahun->save();

        $tahun = new \App\Models\TahunRilis();
        $tahun->tahun = "2020";
        $tahun->save();

        $tahun = new \App\Models\TahunRilis();
        $tahun->tahun = "2021";
        $tahun->save();

        $tahun = new \App\Models\TahunRilis();
        $tahun->tahun = "2022";
        $tahun->save();

        // sample Genre
        $genre = new \App\Models\GenreFilm();
        $genre->kategori = "Komedi";
        $genre->save();

        $genre = new \App\Models\GenreFilm();
        $genre->kategori = "Romance";
        $genre->save();

        $genre = new \App\Models\GenreFilm();
        $genre->kategori = "Horror";
        $genre->save();

    }
}
