<?php

namespace App\Models;

use App\Models\User;
use App\Models\Workshop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function workshop(){
        return $this->belongsTo(Workshop::class,'workshop_id','id');
    }
}
