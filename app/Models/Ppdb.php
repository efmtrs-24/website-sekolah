<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    protected $fillable = [
        'nama',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'email',
        'foto',
        'akta',
        'kk',
        'ijazah'
    ];
}