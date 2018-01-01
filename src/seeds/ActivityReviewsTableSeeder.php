<?php

use Illuminate\Database\Seeder;

class ActivityReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_reviews')->delete();
        
        \DB::table('activity_reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'activity_id' => 47,
                'user_id' => 39,
                'title' => 'Good one',
                'content' => 'Must do activity',
                'rating' => 4,
                'status' => 'ENABLED',
                'reply_id' => 0,
                'approved_date' => '2017-09-28 11:18:45',
                'created_at' => '2017-09-22 11:48:01',
                'updated_at' => '2017-09-28 11:18:45',
            ),
            1 => 
            array (
                'id' => 2,
                'activity_id' => 49,
                'user_id' => 39,
                'title' => 'Test',
                'content' => 'Test review',
                'rating' => 4,
                'status' => 'DRAFT',
                'reply_id' => 0,
                'approved_date' => '0000-00-00 00:00:00',
                'created_at' => '2017-09-22 11:57:29',
                'updated_at' => '2017-09-22 11:57:29',
            ),
            2 => 
            array (
                'id' => 3,
                'activity_id' => 49,
                'user_id' => 39,
                'title' => 'Good',
                'content' => 'We enjoyed it',
                'rating' => 4,
                'status' => 'DRAFT',
                'reply_id' => 0,
                'approved_date' => '0000-00-00 00:00:00',
                'created_at' => '2017-09-25 15:00:32',
                'updated_at' => '2017-09-25 15:00:32',
            ),
            3 => 
            array (
                'id' => 4,
                'activity_id' => 56,
                'user_id' => 43,
                'title' => 'Test',
                'content' => 'Testing reviews',
                'rating' => 5,
                'status' => 'ENABLED',
                'reply_id' => 0,
                'approved_date' => '2017-09-28 11:18:09',
                'created_at' => '2017-09-28 11:13:10',
                'updated_at' => '2017-09-28 11:18:09',
            ),
        ));
        
        
    }
}