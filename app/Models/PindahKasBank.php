<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PindahKasBank extends Model
{
    use HasFactory;

    protected $table = 'pindah_kas_banks';
    protected $fillable = [
        'tanggal',
        'kas_bank',
        'pindah_ke',
        'keterangan',
        'nominal',
    ];
}
