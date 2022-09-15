<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casting extends Model
{
    use HasFactory;
    public $fillable = ['nama_pemain', 'foto',
        'jenis_kelamin', 'tanggal_lahir'];
    public $timestamps = true;

    public function movie()
    {
        // model Casting bisa memiliki banyak data (n to n)
        // dari model Movie melalui table pivot(bantuan)
        // yang bernama 'movie_casting' dengan masing-masing
        // fk id movie dan id_casting
        return $this->belongsToMany(Movie::class,
            'movie_casting', 'id_movie', 'id_casting');
    }
}
