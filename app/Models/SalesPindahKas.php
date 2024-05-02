<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesPindahKas extends Model
{
    use HasFactory;

    protected $table = 'sales_pindah_kas';
    protected $fillable = [
        'tanggal',
        'yang_menyerahkan',
        'yang_menerima',
        'pindah_dari_kas',
        'pindah_ke kas',
        'nominal'
    ];
}
