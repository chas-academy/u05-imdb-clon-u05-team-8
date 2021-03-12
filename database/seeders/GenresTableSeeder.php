<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Genre::create(array('name' => 'Action',));
        Genre::create(array('name' => 'Comedy',));
        Genre::create(array('name' => 'Drama',));
        Genre::create(array('name' => 'Fantasy',));
        Genre::create(array('name' => 'Horror',));
        Genre::create(array('name' => 'Mystery',));
        Genre::create(array('name' => 'Romance',));
        Genre::create(array('name' => 'Thriller',));
        Genre::create(array('name' => 'Western',));
    }
}
