<?php

use Illuminate\Database\Seeder;

class TrUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tr_users')->delete();
        
        \DB::table('tr_users')->insert(array (
            0 => 
            array (
                'ID' => 1,
                'user_login' => 'trueagency',
                'user_pass' => '$P$BwniWEXcaUeJYv0UN0...Tbn1Kyad31',
                'user_nicename' => 'trueagency',
                'user_email' => 'webmaster@trueagency.com.au',
                'user_url' => '',
                'user_registered' => '2014-03-20 04:08:38',
                'user_activation_key' => '',
                'user_status' => 0,
                'display_name' => 'True Agency',
            ),
            1 => 
            array (
                'ID' => 2,
                'user_login' => 'playz',
                'user_pass' => '$P$BWyzJXLqZmMbms8TEJNsh/mzUtKVE41',
                'user_nicename' => 'playz',
                'user_email' => 'jeff@playz.com.au',
                'user_url' => 'http://www.playz.com.au',
                'user_registered' => '2014-12-22 04:33:41',
                'user_activation_key' => '',
                'user_status' => 0,
                'display_name' => 'Jeff',
            ),
        ));
        
        
    }
}