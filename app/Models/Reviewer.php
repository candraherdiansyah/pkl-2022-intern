<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'email', 'foto', 'komentar', 'id_movie'];
    public $timestamps = true;

    public function movie()
    {
        // data model Reviewer bisa dimiliki
        // oleh model Movie melalui fk id_movie
        return $this->belongsTo(Movie::class, 'id_movie');
    }
}
