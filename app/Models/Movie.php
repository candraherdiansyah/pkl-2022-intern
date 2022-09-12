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

    public function durasiFilm()
    {
        // data model Movie dimiliki oleh Model DurasiFilm
        // melalui fk id_durasi_film
        return $this->belongsTo(DurasiFilm::class, 'id_durasi_film');
    }
}
