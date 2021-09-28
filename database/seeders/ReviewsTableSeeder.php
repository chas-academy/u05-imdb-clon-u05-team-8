<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Review::create(array('user_id'=>'1','title_id' =>'1','approve'=>'0','body'=>'Review goes here...','created_at'=>'2021-09-01 10:00:00' ));
        Review::create(array('user_id'=>'1','title_id' =>'2','approve'=>'0','body'=>'Review goes here...','created_at'=>'2021-09-02 11:00:00' ));
        Review::create(array('user_id'=>'4','title_id' =>'2','approve'=>'1','body'=>'Review goes here...','created_at'=>'2021-09-03 12:00:00' ));
        Review::create(array('user_id'=>'4','title_id' =>'3','approve'=>'0','body'=>'Review goes here...','created_at'=>'2021-09-04 13:00:00' ));
        Review::create(array('user_id'=>'5','title_id' =>'3','approve'=>'0','body'=>'Review goes here...','created_at'=>'2021-09-05 14:00:00' ));
        Review::create(array('user_id'=>'5','title_id' =>'4','approve'=>'1','body'=>'Review goes here...','created_at'=>'2021-09-06 15:00:00' ));
    }
}
