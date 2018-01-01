<?php

use Illuminate\Database\Seeder;

class EnrolmentMediaSizesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('enrolment_media_sizes')->delete();
        
        \DB::table('enrolment_media_sizes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enrolment_media_id' => 1,
                'dimension' => 'default',
                'filename' => '3f3832c16c8cf7fb35fef641811d20d340514065php7D22.jpeg',
                's3_key' => '8/enrolment/3f3832c16c8cf7fb35fef641811d20d340514065php7D22.jpeg',
                'file_type' => 'jpeg',
                'file_size' => 10351,
                'created_at' => '2016-05-09 09:19:15',
                'updated_at' => '2016-05-09 09:19:15',
            ),
            1 => 
            array (
                'id' => 2,
                'enrolment_media_id' => 2,
                'dimension' => 'default',
                'filename' => '53dfe28f6e5a7289c750082410565ad9d8c4ea43php3619.jpeg',
                's3_key' => '11/enrolment/53dfe28f6e5a7289c750082410565ad9d8c4ea43php3619.jpeg',
                'file_type' => 'jpeg',
                'file_size' => 10351,
                'created_at' => '2016-07-04 18:26:28',
                'updated_at' => '2016-07-04 18:26:28',
            ),
        ));
        
        
    }
}