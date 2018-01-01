<?php

use Illuminate\Database\Seeder;

class TrItsecLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tr_itsec_log')->delete();
        
        \DB::table('tr_itsec_log')->insert(array (
            0 => 
            array (
                'log_id' => 44,
                'log_type' => 'brute_force',
                'log_function' => 'Invalid Login Attempt',
                'log_priority' => 5,
                'log_date' => '2017-11-06 13:33:59',
                'log_date_gmt' => '2017-11-06 03:33:59',
                'log_host' => '124.19.9.210',
                'log_username' => 'admin@playz.com.au',
                'log_user' => 0,
                'log_url' => '',
                'log_referrer' => '',
                'log_data' => 'a:0:{}',
            ),
            1 => 
            array (
                'log_id' => 45,
                'log_type' => 'brute_force',
                'log_function' => 'Invalid Login Attempt',
                'log_priority' => 5,
                'log_date' => '2017-11-20 15:36:57',
                'log_date_gmt' => '2017-11-20 05:36:57',
                'log_host' => '144.132.70.191',
                'log_username' => 'admin@playz.com.au',
                'log_user' => 0,
                'log_url' => '',
                'log_referrer' => '',
                'log_data' => 'a:0:{}',
            ),
            2 => 
            array (
                'log_id' => 46,
                'log_type' => 'brute_force',
                'log_function' => 'Invalid Login Attempt',
                'log_priority' => 5,
                'log_date' => '2017-11-21 10:54:23',
                'log_date_gmt' => '2017-11-21 00:54:23',
                'log_host' => '115.146.75.10',
                'log_username' => 'playz',
                'log_user' => 2,
                'log_url' => '',
                'log_referrer' => '',
                'log_data' => 'a:0:{}',
            ),
            3 => 
            array (
                'log_id' => 47,
                'log_type' => 'brute_force',
                'log_function' => 'Invalid Login Attempt',
                'log_priority' => 5,
                'log_date' => '2017-11-21 10:54:55',
                'log_date_gmt' => '2017-11-21 00:54:55',
                'log_host' => '115.146.75.10',
                'log_username' => 'playz',
                'log_user' => 2,
                'log_url' => '',
                'log_referrer' => '',
                'log_data' => 'a:0:{}',
            ),
            4 => 
            array (
                'log_id' => 48,
                'log_type' => 'brute_force',
                'log_function' => 'Invalid Login Attempt',
                'log_priority' => 5,
                'log_date' => '2017-11-21 12:50:41',
                'log_date_gmt' => '2017-11-21 02:50:41',
                'log_host' => '144.132.70.191',
                'log_username' => 'admin@playz.com.au',
                'log_user' => 0,
                'log_url' => '',
                'log_referrer' => '',
                'log_data' => 'a:0:{}',
            ),
        ));
        
        
    }
}