<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';

    protected $fillable = [
        'nama',
        'jk',
        'tempat',
        'tgl_lahir',
        'jabatan',
        'tmt',
        'ijazah',
        'jurusan',
        'tahun',
        'perguruan_tinggi',
        'bidang_studi',
        'alamat',
        'status'
    ];
}