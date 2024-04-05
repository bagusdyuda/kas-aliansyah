<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pindahplot extends Model
{
    use HasFactory;

    protected $table = 'pindahplot';
    protected $fillable = [
        'tanggal',
        'nota',
        'dari_plot',
        'ke_plot',
        'letak_kas',
        'keterangan',
        'nominal'
    ];
}
