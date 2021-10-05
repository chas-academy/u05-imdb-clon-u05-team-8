<?php

namespace App\Models;
use App\Models\Title;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public function titles()
    {
        return $this->belongsToMany(Title::class)->withTimestamps();
    }
}
