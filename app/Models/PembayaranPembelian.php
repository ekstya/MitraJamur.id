<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PembayaranPembelian extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pembayaran_pembelian';
    protected $fillable = [
        'tanggalPembayaran',
        'user_id',
        'pembelian_id',
        'statusPembayaran'
    ];
}
