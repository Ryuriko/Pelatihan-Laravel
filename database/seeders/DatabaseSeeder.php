<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Mahasiswa::factory(10)->create();

        \App\Models\Mahasiswa::create([
            'name' => 'Satria',
            'nim' => 5,
            'jurusan' => 'Informatika',
        ]);

        // \App\Models\Mahasiswa::create([
        //     'name' => 'Ageng',
        //     'nim' => 2,
        //     'jurusan' => 'Informatika',
        // ]);

        // \App\Models\Mahasiswa::create([
        //     'name' => 'Firman',
        //     'nim' => 3,
        //     'jurusan' => 'Informatika',
        // ]);

        // \App\Models\Mahasiswa::create([
        //     'name' => 'Agus',
        //     'nim' => 4,
        //     'jurusan' => 'Teknik Sipil',
        // ]);
    }
}
