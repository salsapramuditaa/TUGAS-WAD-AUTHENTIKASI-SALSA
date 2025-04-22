<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchedMovieController extends Controller
{
    public function index()
    {
        return view('movies.index');  // Pastikan view 'movies.index' ada di resources/views/movies/index.blade.php
    }
}
