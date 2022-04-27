<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalPanen extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'jadwal_panen';
    protected $fillable = [
        'tanggalMulai',
        'jumlahBaglog',
        'musim',
        'user_id'
    ];
}
