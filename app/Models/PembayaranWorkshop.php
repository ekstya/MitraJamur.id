<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PembayaranWorkshop extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pembayaran_workshop';
    protected $fillable = [
        'tanggalPembayaran',
        'user_id',
        'pendaftaran_workshop_id',
        'statusPembayaran'
    ];
}
