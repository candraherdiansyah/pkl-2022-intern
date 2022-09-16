<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $fillable = ['judul_film', 'background', 'cover',
        'sinopsis', 'id_tahun_rilis', 'id_durasi_film'];
    public $timestamps = true;

    public function tahunRilis()
    {
        // data model Movie dimiliki oleh Model TahunRilis
        // melalui fk id_tahun_rilis
        return $this->belongsTo(TahunRilis::class, 'id_tahun_rilis');
    }

    public function casting()
    {
        // model Movie bisa memiliki banyak data (n to n)
        // dari model Casting melalui table pivot(bantuan)
        // yang bernama 'movie_casting' dengan masing-masing
        // fk id movie dan id_casting
        return $this->belongsToMany(Casting::class,
            'movie_casting', 'id_casting', 'id_movie');
    }

    public function genreFilm()
    {
        // data model Movie dimiliki oleh Model GenreFilm
        // melalui fk id_genre
        return $this->belongsTo(GenreFilm::class, 'id_genre');
    }

    public function reviewer()
    {
        // data model Movie dimiliki oleh Model Reviwer
        // melalui fk id_reviewer
        return $this->hasMany(Reviwer::class, 'id_movie');
    }
}
