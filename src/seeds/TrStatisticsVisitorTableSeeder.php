<?php

use Illuminate\Database\Seeder;

class TrStatisticsVisitorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tr_statistics_visitor')->delete();
        
        \DB::table('tr_statistics_visitor')->insert(array (
            0 => 
            array (
                'ID' => 1,
                'last_counter' => '2015-05-22',
                'referred' => 'http://playz-v2.trueserver.com.au/cms/wp-admin/update.php?action=install-plugin&plugin=wp-statistics&_wpnonce=d1c4396856',
                'agent' => 'Firefox',
                'platform' => 'Windows',
                'version' => '38.0',
                'UAString' => NULL,
                'ip' => '127.0.0.1',
                'location' => '000',
                'hits' => NULL,
                'honeypot' => NULL,
            ),
            1 => 
            array (
                'ID' => 2,
                'last_counter' => '2015-05-22',
                'referred' => 'http://playz.true.local',
                'agent' => 'WordPress',
                'platform' => 'Unknown',
                'version' => '4.0.1',
                'UAString' => '',
                'ip' => '127.0.0.1',
                'location' => '000',
                'hits' => 10,
                'honeypot' => 0,
            ),
        ));
        
        
    }
}