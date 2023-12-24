<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPengembalian extends Model
{
    protected $table = 'detail_pengembalian';
    protected $primaryKey = 'id_detail_pengembalian';

    protected $fillable = [
        'id_detail_pengembalian',
        'id_pengembalian',
        'id_buku',
        'judul_buku'
    ];

    public $timestamps = false;
}
