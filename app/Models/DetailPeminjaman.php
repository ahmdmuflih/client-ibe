<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    protected $table = 'detail_peminjaman';
    protected $primaryKey = 'id_detail_pinjam';

    protected $fillable = [
        'id_detail_pinjam',
        'id_pinjam',
        'id_buku',
        'judul_buku',
        'kondisi_buku'
    ];

    public $timestamps = false;
}
