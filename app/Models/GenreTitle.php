<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Title;
use App\Models\Genre;

class GenreTitle extends Model
{
    use HasFactory;
    protected $table = "genre_title";
}
