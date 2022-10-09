<?php

namespace Database\Seeders;

use App\Models\Golongan;
use Illuminate\Database\Seeder;

class GolonganSeed extends Seeder
{
    public function run()
    {
        Golongan::create([
            'nama_golongan' => 'MASTER',
            'gaji' => 5000000,
            'tunjangan_bulanan' => 500000,
            'tunjangan_pulsa' => 100000,
            'tunjangan_transportasi' => 200000,
            'tunjangan_anak' => 1000000,
            'total_gaji' => 5000000 + 500000 + 100000 + 200000 + 100000 - 5/100,
            'masa_kerja' => '> 10'
        ]);
        Golongan::create([
            'nama_golongan' => 'HIGHT LEVEL',
            'gaji' => 4000000,
            'tunjangan_bulanan' => 400000,
            'tunjangan_pulsa' => 100000,
            'tunjangan_transportasi' => 200000,
            'tunjangan_anak' => 1000000,
            'total_gaji' => 4000000 + 400000 + 100000 + 200000 + 100000 - 5/100,
            'masa_kerja' => '> 8'
        ]);
        Golongan::create([
            'nama_golongan' => 'MEDIUM LEVEL',
            'gaji' => 3000000,
            'tunjangan_bulanan' => 300000,
            'tunjangan_pulsa' => 100000,
            'tunjangan_transportasi' => 200000,
            'tunjangan_anak' => 1000000,
            'total_gaji' => 3000000 + 300000 + 100000 + 200000 + 100000 - 5/100,
            'masa_kerja' => '> 5'
        ]);
        Golongan::create([
            'nama_golongan' => 'LOW LEVEL',
            'gaji' => 2500000,
            'tunjangan_bulanan' => 200000,
            'tunjangan_pulsa' => 100000,
            'tunjangan_transportasi' => 200000,
            'tunjangan_anak' => 0,
            'total_gaji' => 2500000 + 200000 + 100000 + 200000 + 0 - 5/100,
            'masa_kerja' => '< 5'
        ]);
    }
}
