<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembelian extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pembelian';
    protected $fillable = [
        'tanggalPembelian',
        'user_id',
        'totalPembelian',
    ];
}
