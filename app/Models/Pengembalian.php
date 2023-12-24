<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'pengembalian';
    protected $primaryKey = 'id_pengembalian';

    protected $fillable = [
        'id_pengembalian',
        'id_pinjam',
        'tanggal_pengembalian',
        'denda',
        'id_pilihan_bayar',
    ];
    
    public $timestamps = false;
}
