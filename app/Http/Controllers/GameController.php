<?php

namespace App\Http\Controllers;

use App\Models\Games;  // Pastikan menggunakan model Games
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        // Mengambil semua data game dari database
        $games = Games::all();

        // Mengirimkan data game ke view 'index.blade.php'
        return view('index', compact('games'));  // Pastikan nama view-nya adalah 'index'
    }
    public function store()
    {
        // Mengambil semua data game dari database
        $games = Games::all();

        // Mengirimkan data game ke view 'index.blade.php'
        return view('store', compact('games'));  // Pastikan nama view-nya adalah 'index'
    }
}
