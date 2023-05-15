<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::create([
            'name' => 'Teknik Komputer dan Jaringan'
        ]);

        Jurusan::create([
            'name' => 'Teknik Instalasi Tenaga Listrik'
        ]);

        Jurusan::create([
            'name' => 'Desain Pemodelan dan Bangunan'
        ]);

        Jurusan::create([
            'name' => 'Teknik Pengelasan'
        ]);

        Jurusan::create([
            'name' => 'Teknik dan Bisnis Sepeda Motor'
        ]);

        Jurusan::create([
            'name' => 'Teknik Elektronika Industri'
        ]);
    }
}
