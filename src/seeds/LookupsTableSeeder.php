<?php

use Illuminate\Database\Seeder;

class LookupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lookups')->delete();
        
        \DB::table('lookups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'NEED_TO_BRING',
                'is_system' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'FOOD_OPTIONS_AVAILABLE',
                'is_system' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
        ));
        
        
    }
}