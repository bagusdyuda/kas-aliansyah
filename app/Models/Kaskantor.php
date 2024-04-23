<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaskantor extends Model
{
    use HasFactory;

    protected $table = 'kaskantor';
    protected $fillable = [
        'tanggal_masuk',
        'nota',
        'letak_setoran',
        'plot',
        'pengirim',
        'penerima',
        'keperluan',
        'keterangan',
        'nominal'
    ];
}
