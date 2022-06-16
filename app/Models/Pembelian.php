<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
