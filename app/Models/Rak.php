<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $table = 'rak';
    protected $primaryKey = 'id_rak';

    protected $fillable = [
        'id_rak',
        'lokasi_rak',
    ];
}
