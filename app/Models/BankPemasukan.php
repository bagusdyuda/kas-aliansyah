<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankPemasukan extends Model
{
    use HasFactory;

    protected $table = 'bank_pemasukans';
    protected $fillable = [
        'unit',
        'tanggal_mutasi_bank',
        'no_ref',
        'letak_kas_bank',
        'atas_nama_pengirim',
        'keperluan',
        'nominal'
    ];
}
