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


        Title::create(array('name' =>'Duck Soup','user_id'=>'1','publ_date'=>'1934-01-01'));
        Title::create(array('name' =>'Modern Times','user_id'=>'1','publ_date'=>'1936-01-01'));
        Title::create(array('name' =>'Monty Python and the holy grail','user_id'=>'1','publ_date'=>'1975-01-01'));

        Title::create(array('name' =>'La Jetee','user_id'=>'1','publ_date'=>'1958-01-01'));
        Title::create(array('name' =>'Forrest Gump','user_id'=>'1','publ_date'=>'1994-01-01'));
        Title::create(array('name' =>'Cast Away','user_id'=>'1','publ_date'=>'2002-01-01'));
        Title::create(array('name' =>'The Revenant','user_id'=>'1','publ_date'=>'2010-01-01'));
        Title::create(array('name' =>'Butch Cassidy and the Sundance Kid','user_id'=>'1','publ_date'=>'1976-01-01'));
    }
}
