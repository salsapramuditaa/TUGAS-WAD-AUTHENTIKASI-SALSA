<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Mengambil semua data dari tabel movies
        return view('movies.index', compact('movies'));
    }
}
