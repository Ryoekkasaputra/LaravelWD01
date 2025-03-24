<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    public function run()
    {
        Obat::create([
            'nama_obat' => 'Paracetamol',
            'kemasan' => 'Tablet',
            'harga' => 5000,
        ]);

        Obat::create([
            'nama_obat' => 'Amoxicillin',
            'kemasan' => 'Kapsul',
            'harga' => 15000,
        ]);

        Obat::create([
            'nama_obat' => 'Ibuprofen',
            'kemasan' => 'Tablet',
            'harga' => 10000,
        ]);
    }
}
