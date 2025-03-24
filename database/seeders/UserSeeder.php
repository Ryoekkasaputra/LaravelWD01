<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nama' => 'Willian Zidane',
            'alamat' => 'Jl. Kesehatan No. 10',
            'no_hp' => '081234567890',
            'email' => 'zidanegaming@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);


        User::create([
            'nama' => 'Amrimir',
            'alamat' => 'Jl. Kesehatan No. 15',
            'no_hp' => '081234567895',
            'email' => 'amrimir@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);

        User::create([
            'nama' => 'Firman Nafiu',
            'alamat' => 'Jl. Sehat No. 5',
            'no_hp' => '081298765432',
            'email' => 'firmannafiu@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);


        User::create([
            'nama' => 'Ryo Ekka',
            'alamat' => 'Jl. Sehat No. 10',
            'no_hp' => '081298765454',
            'email' => 'ryoekka987@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);
    }
}

