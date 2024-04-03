<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setorankas extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit',
        'tgl_setoran',
        'nota',
        'letak_setoran',
        'pengirim',
        'keperluan',
        'keterangan',
        'nominal'
    ];
}
