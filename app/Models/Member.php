<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'id_member';

    protected $fillable = [
        'id_member',
        'username_member',
        'password_member',
        'nama_member',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telp'
    ];

    public $timestamps = false;
}
