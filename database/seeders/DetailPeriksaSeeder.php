<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailPeriksa;
use App\Models\Periksa;
use App\Models\Obat;

class DetailPeriksaSeeder extends Seeder
{
    public function run()
    {
        // Ambil data periksa pertama
        $periksa = Periksa::first();
        // Ambil beberapa obat
        $obat1 = Obat::where('nama_obat', 'Paracetamol')->first();
        $obat2 = Obat::where('nama_obat', 'Ibuprofen')->first();

        if ($periksa && $obat1 && $obat2) {
            DetailPeriksa::create([
                'id_periksa' => $periksa->id,
                'id_obat' => $obat1->id,
            ]);

            DetailPeriksa::create([
                'id_periksa' => $periksa->id,
                'id_obat' => $obat2->id,
            ]);
        }
    }
}
