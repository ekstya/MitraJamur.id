<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PendaftaranWorkshop extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pendaftaran_workshop';
    protected $fillable = [
        'tanggal_pendaftaran',
        'user_id',
        'workshop_id'
    ];
}
