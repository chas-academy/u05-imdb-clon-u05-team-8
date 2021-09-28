<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listitem;

class ListitemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Listitem::create(array('listing_id'=>'1','title_id'=>'4'));
        Listitem::create(array('listing_id'=>'1','title_id'=>'5'));
        Listitem::create(array('listing_id'=>'1','title_id'=>'6'));
        Listitem::create(array('listing_id'=>'1','title_id'=>'2'));

        Listitem::create(array('listing_id'=>'2','title_id'=>'1'));
        Listitem::create(array('listing_id'=>'2','title_id'=>'2'));
        Listitem::create(array('listing_id'=>'2','title_id'=>'3'));

        Listitem::create(array('listing_id'=>'3','title_id'=>'5'));
        Listitem::create(array('listing_id'=>'3','title_id'=>'6'));
        Listitem::create(array('listing_id'=>'3','title_id'=>'7'));

        Listitem::create(array('listing_id'=>'4','title_id'=>'4'));
        Listitem::create(array('listing_id'=>'4','title_id'=>'5'));
        Listitem::create(array('listing_id'=>'4','title_id'=>'1'));
    }
}
