<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setorankas extends Model
{
    use HasFactory;

    protected $table = 'sales_setorans';
    protected $fillable = [
        'unit',
        'tanggal_setoran',
        'penerima',
        'keperluan',
        'nominal'
    ];
}
