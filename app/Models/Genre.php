<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genre';
    protected $primaryKey = 'id_genre';

    protected $fillable = [
        'id_genre',
        'kategori_genre'
    ];

    public $timestamps = false;
}
