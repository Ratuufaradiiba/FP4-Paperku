<?php

namespace Database\Seeders;

use Illuminate\Support\Arr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i <= 100; $i++) {
            DB::table('pengguna')->insert(
                [
                    'notelp' => rand(),
                    'name' => uniqid('nama_'),
                    'gender' => Arr::random(['L', 'P']),
                    'alamat' => uniqid('alamat_'),
                    'email' => uniqid() . '@gmail.com',
                    'foto' => uniqid('foto_'),


                ]
            );
        }
    }
}
