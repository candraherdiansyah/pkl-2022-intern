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
}
