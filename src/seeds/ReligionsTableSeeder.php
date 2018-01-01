<?php

use Illuminate\Database\Seeder;

class ReligionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('religions')->delete();
        
        \DB::table('religions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'N/A',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Christianity',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Christianity - Anglican',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Christianity - Baptist',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Christianity - Catholic',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Christianity - Churches of Christ',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Christianity - Jehovah\'s Witness',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Christianity - Lutheran',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Christianity - Orthodox',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Christianity - Pentecostal',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Christianity - Presbyterian and Reformed',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Christianity - Salvation Army',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Christianity - Uniting Church',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Christianity - Other Christian',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Buddhism',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Hinduism',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Islam',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Judaism',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Other',
                'created_at' => '2016-09-19 23:30:00',
                'updated_at' => '2016-09-12 23:30:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}