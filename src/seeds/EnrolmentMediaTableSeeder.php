<?php

use Illuminate\Database\Seeder;

class EnrolmentMediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('enrolment_media')->delete();
        
        \DB::table('enrolment_media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enrolment_field_id' => 43,
                'original_name' => '',
                'type' => 'CHILDREN_PHOTO',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2016-05-09 09:19:15',
                'updated_at' => '2016-05-09 09:19:15',
            ),
            1 => 
            array (
                'id' => 2,
                'enrolment_field_id' => 43,
                'original_name' => '',
                'type' => 'CHILDREN_PHOTO',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2016-07-04 18:26:28',
                'updated_at' => '2016-07-04 18:26:28',
            ),
        ));
        
        
    }
}