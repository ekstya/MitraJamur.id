<?php

namespace App\Models;

use App\Models\Kabupaten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kecamatan';
    protected $fillable = [
        'kabupaten_id',
        'namaKecamatan'
    ];
    public function kabupaten(){
        return $this->belongsTo(Kabupaten::class,'kabupaten_id','id');
    }
}
