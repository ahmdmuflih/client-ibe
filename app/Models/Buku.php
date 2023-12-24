<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';

    protected $fillable = [
        'id_buku',
        'judul_buku',
        'tahun_terbit',
        'id_pengarang',
        'id_penerbit',
        'jumlah_halaman',
        'isbn',
        'id_rak',
        'stok_buku',
        'id_genre',
        'poin_buku'
    ];

    public $timestamps = false;
}
