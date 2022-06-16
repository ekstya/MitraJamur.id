<?php

namespace App\Models;

use App\Models\Pembelian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function pembelian(){
        return $this->belongsTo(Pembelian::class,'pembelian_id','id');
    }
}
