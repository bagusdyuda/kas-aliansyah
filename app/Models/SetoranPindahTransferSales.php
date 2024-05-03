<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetoranPindahTransferSales extends Model
{
    use HasFactory;

    protected $table = 'setoran_pindah_transfer_sales';
    protected $fillable = [
        'tanggal',
        'sales',
        'no_ref',
        'bank',
        'nominal'
    ];
}
