<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'universitas_id',
        'nim',
        'nama_mahasiswa'
    ];

    public function universitas()
    {
        return $this->belongsTo(Universitas::class);
    }
}
