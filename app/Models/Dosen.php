<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'universitas_id',
        'nip',
        'nama_dosen'
    ];

    public function universitas()
    {
        return $this->belongsTo(Universitas::class);
    }
}
