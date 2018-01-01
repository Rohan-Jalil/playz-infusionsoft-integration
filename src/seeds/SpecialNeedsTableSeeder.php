<?php

use Illuminate\Database\Seeder;

class SpecialNeedsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('special_needs')->delete();
        
        \DB::table('special_needs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Autism Spectrum Disorder',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mobility Impaired',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Hearing Impaired',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Vision Impaired',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Intellectual Disability',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            5 => 
            array (
                'id' => 99,
                'name' => 'Other',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
        ));
        
        
    }
}