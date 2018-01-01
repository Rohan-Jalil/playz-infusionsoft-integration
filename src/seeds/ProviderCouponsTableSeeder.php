<?php

use Illuminate\Database\Seeder;

class ProviderCouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provider_coupons')->delete();
        
        \DB::table('provider_coupons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'FIXED',
                'time_limited' => 1,
                'available' => 1,
                'use_count' => 0,
                'usage_limit' => 1,
                'discounts_allowed' => 0,
                'usage_type' => 'ONCE',
                'prefix' => 'SCHOOLDISCOUNT',
                'coupon_code' => 'SCHOOLDISCOUNT',
                'is_random' => 0,
                'expires_at' => '2018-09-30 23:29:00',
                'amount' => '15.00',
                'user_id' => 8,
                'created_at' => '2017-05-04 11:50:52',
                'updated_at' => '2017-05-04 11:50:52',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'PERCENT',
                'time_limited' => 1,
                'available' => 1,
                'use_count' => 0,
                'usage_limit' => 5,
                'discounts_allowed' => 1,
                'usage_type' => 'FIXED',
                'prefix' => 'PREPPYS',
                'coupon_code' => 'PREPPYSUGQ161WCDSQ5WMVEBBEP0',
                'is_random' => 1,
                'expires_at' => '2017-11-01 23:29:00',
                'amount' => '15.00',
                'user_id' => 8,
                'created_at' => '2017-05-04 11:51:57',
                'updated_at' => '2017-05-04 11:51:57',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'FIXED',
                'time_limited' => 0,
                'available' => 0,
                'use_count' => 0,
                'usage_limit' => 0,
                'discounts_allowed' => 1,
                'usage_type' => 'MULTI',
                'prefix' => 'GEN123',
                'coupon_code' => 'GEN123',
                'is_random' => 0,
                'expires_at' => NULL,
                'amount' => '10.00',
                'user_id' => 21,
                'created_at' => '2017-07-28 13:57:39',
                'updated_at' => '2017-07-28 14:00:30',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'FIXED',
                'time_limited' => 0,
                'available' => 0,
                'use_count' => 0,
                'usage_limit' => 0,
                'discounts_allowed' => 1,
                'usage_type' => 'MULTI',
                'prefix' => 'GEN123',
                'coupon_code' => 'GEN123',
                'is_random' => 0,
                'expires_at' => NULL,
                'amount' => '15.00',
                'user_id' => 27,
                'created_at' => '2017-08-04 13:12:37',
                'updated_at' => '2017-08-04 13:12:37',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'FIXED',
                'time_limited' => 0,
                'available' => 0,
                'use_count' => 0,
                'usage_limit' => 1,
                'discounts_allowed' => 0,
                'usage_type' => 'ONCE',
                'prefix' => '',
                'coupon_code' => '8E0X2JQDL1SSJVX4A8ZD0',
                'is_random' => 1,
                'expires_at' => NULL,
                'amount' => '10.00',
                'user_id' => 30,
                'created_at' => '2017-09-12 09:32:03',
                'updated_at' => '2017-09-12 09:32:20',
                'deleted_at' => '2017-09-12 09:32:20',
            ),
        ));
        
        
    }
}