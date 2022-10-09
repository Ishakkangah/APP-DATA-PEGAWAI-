<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
       'golongan_id', 'nip', 'name', 'alamat', 
    ];

    // SETIAP PEGAWAI MEMPUNYAI SATU GOLONGAN
    function golongan(){
        return $this->belongsTo(Golongan::class);
    }


}
