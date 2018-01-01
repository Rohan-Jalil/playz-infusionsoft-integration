<?php

use Illuminate\Database\Seeder;

class ActivityDiscountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_discounts')->delete();
        
        \DB::table('activity_discounts')->insert(array (
            0 => 
            array (
                'id' => 4,
                'activity_id' => 11,
                'type' => '',
                'event_count' => 0,
                'amount' => '0.00',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'provider_discount_id' => 1,
            ),
            1 => 
            array (
                'id' => 5,
                'activity_id' => 12,
                'type' => '',
                'event_count' => 0,
                'amount' => '0.00',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'provider_discount_id' => 3,
            ),
            2 => 
            array (
                'id' => 6,
                'activity_id' => 21,
                'type' => '',
                'event_count' => 0,
                'amount' => '0.00',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'provider_discount_id' => 4,
            ),
            3 => 
            array (
                'id' => 7,
                'activity_id' => 30,
                'type' => '',
                'event_count' => 0,
                'amount' => '0.00',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'provider_discount_id' => 4,
            ),
        ));
        
        
    }
}