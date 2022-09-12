<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DurasiFilm extends Model
{
    use HasFactory;
    public $fillable = ['durasi'];
    public $timestamps = true;

    public function movie()
    {
        return $this->hasMany(Movie::class, 'id_durasi_film');
    }
}
