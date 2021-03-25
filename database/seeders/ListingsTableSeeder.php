<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Listing::create(array('name' =>'JL Watchlist 1','user_id'=>'1'));
        Listing::create(array('name' =>'ES Watchlist 1','user_id'=>'4'));
        Listing::create(array('name' =>'Cao Watchlist 1','user_id'=>'5'));
        Listing::create(array('name' =>'Cao Watchlist 2','user_id'=>'5'));
    }
}
