<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoinMember extends Model
{
    protected $table = 'poin_member';
    protected $primaryKey = 'id_member';

    protected $fillable = [
        'id_member',
        'id_pinjam',
        'jumlah_poin',
        'tanggal_didapat',
    ];

    public $timestamps = false;
}
