<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    // Menentukan kolom mana yang bisa diisi secara massal
    protected $fillable = ['name','genre', 'caption','image']; // Hanya kolom 'name' yang boleh diisi menggunakan mass assignment
}
