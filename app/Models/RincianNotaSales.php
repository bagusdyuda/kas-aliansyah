<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianNotaSales extends Model
{
    use HasFactory;

    protected $table = 'rincian_nota_sales';
    protected $fillable = [
        'id_unit',
        'nama_unit',
        'tanggal_setor',
        'nama_customer',
        'nominal'
    ];
}
