<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Periksa;
use App\Models\User;

class PeriksaSeeder extends Seeder
{
    public function run()
    {
        $pasien = User::where('role', 'pasien')->first();
        $dokter = User::where('role', 'dokter')->first();

        Periksa::create([
            'id_pasien' => $pasien->id,
            'id_dokter' => $dokter->id,
            'tgl_periksa' => now(),
            'catatan' => 'Demam tinggi',
            'biaya_periksa' => 50000,
        ]);
    }
}

