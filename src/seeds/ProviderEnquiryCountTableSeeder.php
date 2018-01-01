<?php

use Illuminate\Database\Seeder;

class ProviderEnquiryCountTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provider_enquiry_count')->delete();
        
        \DB::table('provider_enquiry_count')->insert(array (
            0 => 
            array (
                'id' => 1,
                'provider_id' => 8,
                'year' => 2017,
                'month' => 5,
                'count' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'provider_id' => 6,
                'year' => 2017,
                'month' => 5,
                'count' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'provider_id' => 33,
                'year' => 2017,
                'month' => 9,
                'count' => 7,
            ),
            3 => 
            array (
                'id' => 4,
                'provider_id' => 40,
                'year' => 2017,
                'month' => 9,
                'count' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'provider_id' => 33,
                'year' => 2017,
                'month' => 10,
                'count' => 2,
            ),
        ));
        
        
    }
}