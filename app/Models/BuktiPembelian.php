<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuktiPembelian extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'bukti_pembelian';
    protected $fillable = [
        'pembayaran_pembelian_id',
        'bukti',
        'deleted_at'
    ];
}
