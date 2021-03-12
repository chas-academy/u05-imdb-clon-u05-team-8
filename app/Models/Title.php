<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Genre;

class Title extends Model
{
    use HasFactory;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name',
        'user_id',

    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
