<?php

use Illuminate\Database\Seeder;

class ProviderDiscountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provider_discounts')->delete();
        
        \DB::table('provider_discounts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'PERCENT',
                'event_count' => 3,
                'amount' => '10.00',
                'user_id' => 8,
                'created_at' => '2017-05-04 11:46:31',
                'updated_at' => '2017-05-04 11:47:06',
                'deleted_at' => NULL,
                'discount_type' => 'EARLY_BIRD',
                'multi_is_across_listings' => 0,
                'multi_is_per_participant' => 0,
                'early_days_prior' => 14,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'PERCENT',
                'event_count' => 10,
                'amount' => '10.00',
                'user_id' => 8,
                'created_at' => '2017-05-04 11:47:32',
                'updated_at' => '2017-05-04 11:48:38',
                'deleted_at' => NULL,
                'discount_type' => 'MULTI_SESSION',
                'multi_is_across_listings' => 1,
                'multi_is_per_participant' => 1,
                'early_days_prior' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'FIXED',
                'event_count' => 3,
                'amount' => '30.00',
                'user_id' => 8,
                'created_at' => '2017-05-04 11:49:26',
                'updated_at' => '2017-05-04 11:49:26',
                'deleted_at' => NULL,
                'discount_type' => 'FAMILY',
                'multi_is_across_listings' => 0,
                'multi_is_per_participant' => 0,
                'early_days_prior' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'PERCENT',
                'event_count' => 0,
                'amount' => '10.00',
                'user_id' => 21,
                'created_at' => '2017-07-28 13:56:54',
                'updated_at' => '2017-07-28 13:56:54',
                'deleted_at' => NULL,
                'discount_type' => 'EARLY_BIRD',
                'multi_is_across_listings' => 0,
                'multi_is_per_participant' => 0,
                'early_days_prior' => 10,
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'PERCENT',
                'event_count' => 2,
                'amount' => '10.00',
                'user_id' => 27,
                'created_at' => '2017-08-04 13:10:45',
                'updated_at' => '2017-08-04 13:10:45',
                'deleted_at' => NULL,
                'discount_type' => 'MULTI_SESSION',
                'multi_is_across_listings' => 1,
                'multi_is_per_participant' => 1,
                'early_days_prior' => 0,
            ),
        ));
        
        
    }
}