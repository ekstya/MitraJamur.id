<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuktiWorkshop extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'bukti_workshop';
    protected $fillable = [
        'pembayaran_workshop_id',
        'bukti',
        'deleted_at'
    ];
}
