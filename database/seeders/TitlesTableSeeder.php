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
        Title::create(array('name' =>'La Jetee','user_id'=>'1'));
        Title::create(array('name' =>'Forrest Gump','user_id'=>'1'));
        Title::create(array('name' =>'Cast Away','user_id'=>'1'));
    }
}
