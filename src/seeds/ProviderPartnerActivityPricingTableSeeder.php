<?php

use Illuminate\Database\Seeder;

class ProviderPartnerActivityPricingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provider_partner_activity_pricing')->delete();
        
        \DB::table('provider_partner_activity_pricing')->insert(array (
            0 => 
            array (
                'id' => 1,
                'activity_id' => 2,
                'user_id' => 2,
                'type' => 'Child',
                'price' => '25.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-04-24 18:05:16',
                'updated_at' => '2017-04-24 18:05:16',
            ),
            1 => 
            array (
                'id' => 3,
                'activity_id' => 7,
                'user_id' => 6,
                'type' => 'per child',
                'price' => '25.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-04-26 13:45:06',
                'updated_at' => '2017-04-26 13:45:06',
            ),
            2 => 
            array (
                'id' => 4,
                'activity_id' => 7,
                'user_id' => 6,
                'type' => 'adult price',
                'price' => '50.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-04-26 13:45:06',
                'updated_at' => '2017-04-26 13:45:06',
            ),
            3 => 
            array (
                'id' => 5,
                'activity_id' => 35,
                'user_id' => 30,
                'type' => 'Per head',
                'price' => '25.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-09-04 14:03:08',
                'updated_at' => '2017-09-04 14:03:08',
            ),
            4 => 
            array (
                'id' => 6,
                'activity_id' => 35,
                'user_id' => 30,
                'type' => 'Early bird',
                'price' => '23.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-09-04 14:03:08',
                'updated_at' => '2017-09-04 14:03:08',
            ),
            5 => 
            array (
                'id' => 10,
                'activity_id' => 37,
                'user_id' => 29,
                'type' => 'Basic Party - per child',
                'price' => '25.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-09-04 16:32:54',
                'updated_at' => '2017-09-04 16:32:54',
            ),
            6 => 
            array (
                'id' => 11,
                'activity_id' => 37,
                'user_id' => 29,
                'type' => 'Bronze party-  per child',
                'price' => '30.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-09-04 16:32:54',
                'updated_at' => '2017-09-04 16:32:54',
            ),
            7 => 
            array (
                'id' => 12,
                'activity_id' => 38,
                'user_id' => 30,
                'type' => 'Per head',
                'price' => '25.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-09-11 14:15:43',
                'updated_at' => '2017-09-11 14:15:43',
            ),
            8 => 
            array (
                'id' => 15,
                'activity_id' => 65,
                'user_id' => 41,
                'type' => 'Term classes',
                'price' => '200.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-09-27 15:11:44',
                'updated_at' => '2017-09-27 15:11:44',
            ),
            9 => 
            array (
                'id' => 16,
                'activity_id' => 65,
                'user_id' => 41,
                'type' => 'single classes',
                'price' => '25.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-09-27 15:11:44',
                'updated_at' => '2017-09-27 15:11:44',
            ),
            10 => 
            array (
                'id' => 17,
                'activity_id' => 70,
                'user_id' => 50,
                'type' => 'Session Price',
                'price' => '30.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-09-27 16:05:02',
                'updated_at' => '2017-09-27 16:05:02',
            ),
            11 => 
            array (
                'id' => 18,
                'activity_id' => 70,
                'user_id' => 50,
                'type' => 'Multi Child Price',
                'price' => '25.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-09-27 16:05:02',
                'updated_at' => '2017-09-27 16:05:02',
            ),
            12 => 
            array (
                'id' => 22,
                'activity_id' => 77,
                'user_id' => 33,
                'type' => 'per lesson',
                'price' => '50.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-10-10 11:13:49',
                'updated_at' => '2017-10-10 11:13:49',
            ),
            13 => 
            array (
                'id' => 23,
                'activity_id' => 76,
                'user_id' => 45,
                'type' => 'Adult ticket',
                'price' => '50.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-10-12 11:23:01',
                'updated_at' => '2017-10-12 11:23:01',
            ),
            14 => 
            array (
                'id' => 24,
                'activity_id' => 87,
                'user_id' => 60,
                'type' => 'Piano lesson - 1 hour',
                'price' => '50.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-10-24 13:11:49',
                'updated_at' => '2017-10-24 13:11:49',
            ),
            15 => 
            array (
                'id' => 25,
                'activity_id' => 96,
                'user_id' => 75,
                'type' => 'Session',
                'price' => '1.00',
                'is_default' => 0,
                'is_deleted' => 0,
                'created_at' => '2017-11-03 13:25:44',
                'updated_at' => '2017-11-03 13:25:44',
            ),
        ));
        
        
    }
}