<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_pinjam';

    protected $fillable = [
        'id_pinjam',
        'id_member',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'id_admin'
    ];

    public $timestamps = false;
}
