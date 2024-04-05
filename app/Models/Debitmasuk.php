<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debitmasuk extends Model
{
    use HasFactory;

    protected $table = 'debitmasuk';
    protected $fillable = [
        'unit',
        'tanggal_mutasi_bank',
        'nota',
        'letak_kas_bank',
        'atas_nama_pengirim',
        'keperluan',
        'keterangan',
        'nominal'

    ];
}
