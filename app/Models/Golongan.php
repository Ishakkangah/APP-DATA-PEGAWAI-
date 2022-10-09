<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_golongan', 'gaji', 'masa_kerja', 'total_gaji'
    ];

    // SETIAP GOLONGAN MEMILIKI BANYAK PEGAWAI
    function pegawais(){
        return $this->hasMany(Pegawai::class);
    }

}
