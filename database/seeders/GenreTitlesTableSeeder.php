<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GenreTitle;

class GenreTitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GenreTitle::create(array('title_id' => 1,'genre_id' => 2 ));
        GenreTitle::create(array('title_id' => 2,'genre_id' => 2 ));
        GenreTitle::create(array('title_id' => 3,'genre_id' => 2 ));

        // La Jetee
        GenreTitle::create(array('title_id' => 4,'genre_id' => 3 ));
        GenreTitle::create(array('title_id' => 4,'genre_id' => 6 ));
        //Forrest Gump
        GenreTitle::create(array('title_id' => 5,'genre_id' => 3 ));
        //Cast Away
        GenreTitle::create(array('title_id' => 6,'genre_id' => 3));
        // Western
        GenreTitle::create(array('title_id' => 7,'genre_id' => 9));
        GenreTitle::create(array('title_id' => 8,'genre_id' => 9));
    }
}
