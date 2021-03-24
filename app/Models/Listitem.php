<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Title;

class Listitem extends Model
{
    use HasFactory;


    public function title()
    {
        return $this->belongsTo(Title::class);
    }
}
