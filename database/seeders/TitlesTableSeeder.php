<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Title;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Title::create(array('name' =>'La Jetee'));
        Title::create(array('name' =>'Forrest Gump'));
        Title::create(array('name' =>'Cast Away'));
    }
}
