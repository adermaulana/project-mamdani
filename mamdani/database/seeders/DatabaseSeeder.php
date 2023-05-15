<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PernyataanSeeder;
use Database\Seeders\JurusanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(PernyataanSeeder::class);
        $this->call(JurusanSeeder::class);
        
        User::create([
            'name' => 'Lisa Efrianti',
            'email' => 'lisaefrianti@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
