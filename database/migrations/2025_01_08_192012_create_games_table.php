<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'games' di database
        Schema::create('games', function (Blueprint $table) {
            // Menambahkan kolom 'id' sebagai primary key dengan auto-increment
            $table->id();

            // Menambahkan kolom 'name' dengan tipe data string (untuk nama game)
            $table->string('name');
            $table->string('genre');
            $table->string('caption');
            $table->string('image');
            // Menambahkan kolom 'created_at' dan 'updated_at' secara otomatis
            $table->timestamps(); // Kolom ini digunakan untuk mencatat waktu pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
