<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    protected $table = 'pengarang';
    protected $primaryKey = 'id_pengarang';

    protected $fillable = [
        'id_pengarang',
        'nama_pengarang',
        'kontak',
    ];

    public $timestamps = false;
}
