<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workshop extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'workshop';
    protected $fillable = [
        'gambarWorkshop',
        'namaWorkshop',
        'waktuWorkshop',
        'hargaWorkshop',
        'deskripsiWorkshop',
    ];
}
