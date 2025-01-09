<?php

namespace Database\Seeders;

use App\Models\Games;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Memanggil GamesSeeder untuk menjalankan seeding data pada tabel 'games'
        $this->call(
            GamesSeeder::class // Menggunakan GamesSeeder untuk mengisi data ke dalam tabel 'games'
        );

    }
}
