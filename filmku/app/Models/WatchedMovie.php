<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watched extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id', 'watched_at']; // Sesuaikan dengan kolom di tabel watched

    // Relasi ke model Movie (One-to-Many)
    public function movie()
    {
        return $this->belongsTo(Movie::class); // Setiap watched movie belongs to 1 movie
    }
}
