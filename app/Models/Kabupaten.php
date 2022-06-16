<?php

namespace App\Models;

use App\Models\Provinsi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kabupaten extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kabupaten';
    protected $fillable = [
        'provinsi_id',
        'namaKabupaten'
    ];

    public function provinsi(){
        return $this->belongsTo(Provinsi::class,'provinsi_id','id');
    }
}
