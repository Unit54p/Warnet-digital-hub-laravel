<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Games;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menyiapkan array data untuk game yang akan dimasukkan ke database
        $games = [
            ['name' => 'The Legend of Zelda: Breath of the Wild', 'genre' => 'Action-adventure', 'caption' => 'The best game ever', 'image' => 'god_of_war.png'],
            ['name' => 'Super Mario Odyssey', 'genre' => 'Platformer', 'caption' => 'The best Mario game', 'image' => 'god_of_war.png'],
            ['name' => 'Splatoon 2', 'genre' => 'Third-person shooter', 'caption' => 'The best shooter game', 'image' => 'god_of_war.png'],
            ['name' => 'Mario Kart 8 Deluxe', 'genre' => 'Racing', 'caption' => 'The best racing game', 'image' => 'god_of_war.png'],
            ['name' => 'Xenoblade Chronicles 2', 'genre' => 'Action RPG', 'caption' => 'The best RPG game', 'image' => 'god_of_war.png'],
            ['name' => 'ARMS', 'genre' => 'Fighting', 'caption' => 'The best fighting game', 'image' => 'god_of_war.png'],
            ['name' => 'Kirby Star Allies', 'genre' => 'Platformer', 'caption' => 'The best Kirby game', 'image' => 'god_of_war.png'],
            ['name' => 'Donkey Kong Country: Tropical Freeze', 'genre' => 'Platformer', 'caption' => 'The best Donkey Kong game', 'image' => 'god_of_war.png'],
            ['name' => 'Bayonetta 2', 'genre' => 'Action', 'caption' => 'The best action game', 'image' => 'god_of_war.png'],
            ['name' => 'Pokémon: Let\'s Go, Pikachu! and Let\'s Go, Eevee!', 'genre' => 'Role-playing', 'caption' => 'The best Pokémon game', 'image' => 'god_of_war.png'],
            ['name' => 'Hyrule Warriors: Definitive Edition', 'genre' => 'Hack and slash', 'caption' => 'The best hack and slash game', 'image' => 'god_of_war.png'],
            ['name' => 'Mario Tennis Aces', 'genre' => 'Sports', 'caption' => 'The best tennis game', 'image' => 'god_of_war.png'],
            ['name' => 'Fire Emblem Warriors', 'genre' => 'Hack and slash', 'caption' => 'The best Fire Emblem game', 'image' => 'god_of_war.png'],
            ['name' => 'Octopath Traveler', 'genre' => 'Role-playing', 'caption' => 'The best RPG game', 'image' => 'god_of_war.png'],
            ['name' => 'Captain Toad: Treasure Tracker', 'genre' => 'Puzzle', 'caption' => 'The best puzzle game', 'image' => 'god_of_war.png'],
            ['name' => 'Pokkén Tournament DX', 'genre' => 'Fighting', 'caption' => 'The best Pokémon fighting game', 'image' => 'god_of_war.png'],
            ['name' => 'Bayonetta', 'genre' => 'Action', 'caption' => 'The best action game', 'image' => 'god_of_war.png'],
            ['name' => 'The World Ends with You: Final Remix', 'genre' => 'Action', 'image' => 'god_of_war.png'],

        ];

        // Melakukan perulangan (iterasi) untuk setiap elemen dalam array $games
        foreach ($games as $game) {
            // Menyisipkan data game ke dalam tabel 'games' menggunakan metode create
            // Data game akan ditambahkan ke kolom 'name' di tabel database
            Games::create($game); // Menggunakan model Games untuk memasukkan data ke tabel
        }
    }
}
