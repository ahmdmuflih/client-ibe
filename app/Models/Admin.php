<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'id_admin',
        'username_admin',
        'password_admin',
        'nama_admin',
        'jabatan_admin',
        'no_telp'
    ];

    public $timestamps = false;
}
