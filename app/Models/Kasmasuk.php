<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasmasuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'nota',
        'penyerah',
        'id_user',
        'dari_kas',
        'plot',
        'nominal'

    ];
}
