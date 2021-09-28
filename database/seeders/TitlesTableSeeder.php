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


        Title::create(array('name' =>'Duck Soup','poster' =>'ds.jpg','user_id'=>'1','publ_date'=>'1934-01-01'));
        Title::create(array('name' =>'Modern Times','poster' =>'mt.jpg','user_id'=>'1','publ_date'=>'1936-01-01'));
        Title::create(array('name' =>'Monty Python and the holy grail','poster'
        =>'MP_thg.jpg','user_id'=>'1','publ_date'=>'1975-01-01'));

        Title::create(array('name' =>'La Jetee','poster' =>'La_Jetee_Poster.jpg','user_id'=>'1','publ_date'=>'1958-01-01'));
        Title::create(array('name' =>'Forrest Gump','poster' =>'fg.jpg','user_id'=>'1','publ_date'=>'1994-01-01'));
        Title::create(array('name' =>'Cast Away','poster' =>'ca.jpg','user_id'=>'1','publ_date'=>'2002-01-01'));
        Title::create(array('name' =>'The Revenant','poster' =>'tr.jpg','user_id'=>'1','publ_date'=>'2010-01-01'));
        Title::create(array('name' =>'Butch Cassidy and the Sundance Kid','poster'
        =>'bcask.jpg','user_id'=>'1','publ_date'=>'1976-01-01'));
    }
}
