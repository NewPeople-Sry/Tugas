<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('siswa')->insert([
            [
                'nama' => 'Raffa Basjhani',
                'kelas' => 'XI RPL 1',
                'email' => 'raffa@example.com',
                'created_at' => now(),  
                'updated_at' => now(),
            ],

            [
                'nama' => 'Nashwa Aulia',
                'kelas' => 'XI RPL 2',
                'email' => 'aulia@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
