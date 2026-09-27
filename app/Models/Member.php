<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'kode_member',
        'nama',
        'alamat',
        'no_telepon',
        'tanggal_daftar',
        'status',
    ];
}
