<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreFilm extends Model
{
    use HasFactory;
    public $fillable = ['kategori'];
    public $timestamps = true;

    public function movie()
    {
        // model GenreFilm memiliki banyak data
        // dari model Movie melalui fk id_genre
        return $this->hasMany(Movie::class, 'id_genre');
    }
}
