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
        Genre::create(array('name' => 'Action',  'user_id' => '1',));
        Genre::create(array('name' => 'Comedy',  'user_id' => '1',));
        Genre::create(array('name' => 'Drama',   'user_id' => '1',));
        Genre::create(array('name' => 'Fantasy', 'user_id' => '1',));
        Genre::create(array('name' => 'Horror',  'user_id' => '1',));
        Genre::create(array('name' => 'Mystery', 'user_id' => '1',));
        Genre::create(array('name' => 'Romance', 'user_id' => '1',));
        Genre::create(array('name' => 'Thriller','user_id' => '1',));
        Genre::create(array('name' => 'Western', 'user_id' => '1',));
    }
}
