<?php

use Illuminate\Database\Seeder;

class TrStatisticsVisitTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tr_statistics_visit')->delete();
        
        \DB::table('tr_statistics_visit')->insert(array (
            0 => 
            array (
                'ID' => 1,
                'last_visit' => '2015-05-22 05:58:57',
                'last_counter' => '2015-05-22',
                'visit' => 11,
            ),
            1 => 
            array (
                'ID' => 2,
                'last_visit' => '0000-00-00 00:00:00',
                'last_counter' => '2015-05-23',
                'visit' => 0,
            ),
        ));
        
        
    }
}