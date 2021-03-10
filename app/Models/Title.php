<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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

    ];

    public function user()
    {
        //return $this->name;
        //return var_dump($this->belongsTo('App\Models\User'));
        return $this->belongsTo('App\Models\User');
    }
}
