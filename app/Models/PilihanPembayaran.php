<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihanPembayaran extends Model
{
    protected $table = 'pilihan_pembayaran';
    protected $primaryKey = 'id_pilihan_bayar';

    protected $fillable = [
        'id_pilihan_bayar',
        'pilihan_transaksi',
        'nomor_rekening',
    ];

    public $timestamps = false;
}
