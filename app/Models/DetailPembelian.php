<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPembelian extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'detail_pembelian';
    protected $fillable = [
        'pembelian_id',
        'produk_id'
    ];

    public function dataproduk(){
        return $this->belongsTo(Produk::class,'produk_id','id');
    }
}
