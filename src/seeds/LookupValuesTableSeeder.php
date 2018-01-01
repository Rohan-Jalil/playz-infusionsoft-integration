<?php

use Illuminate\Database\Seeder;

class LookupValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lookup_values')->delete();
        
        \DB::table('lookup_values')->insert(array (
            0 => 
            array (
                'id' => 1000,
                'lookup_id' => 1,
                'value' => 'bag',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            1 => 
            array (
                'id' => 1001,
                'lookup_id' => 1,
                'value' => 'lunch',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            2 => 
            array (
                'id' => 1002,
                'lookup_id' => 1,
                'value' => 'hat',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            3 => 
            array (
                'id' => 1003,
                'lookup_id' => 1,
                'value' => 'sunscreen',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            4 => 
            array (
                'id' => 1004,
                'lookup_id' => 1,
                'value' => 'snack',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            5 => 
            array (
                'id' => 1005,
                'lookup_id' => 1,
                'value' => 'sporting equipment',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            6 => 
            array (
                'id' => 1006,
                'lookup_id' => 1,
                'value' => 'swimimng gear',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            7 => 
            array (
                'id' => 1007,
                'lookup_id' => 1,
                'value' => 'musical instrument',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            8 => 
            array (
                'id' => 1008,
                'lookup_id' => 1,
                'value' => 'tablet',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            9 => 
            array (
                'id' => 4000,
                'lookup_id' => 2,
                'value' => 'Nut Free',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            10 => 
            array (
                'id' => 4001,
                'lookup_id' => 2,
                'value' => 'Vegetarian',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            11 => 
            array (
                'id' => 4002,
                'lookup_id' => 2,
                'value' => 'Gluten Free',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            12 => 
            array (
                'id' => 4003,
                'lookup_id' => 2,
                'value' => 'Dairy Free',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            13 => 
            array (
                'id' => 4004,
                'lookup_id' => 2,
                'value' => 'Kosher',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            14 => 
            array (
                'id' => 4005,
                'lookup_id' => 2,
                'value' => 'Halal',
                'is_deleted' => 0,
                'is_default' => 0,
                'priority' => 10,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
        ));
        
        
    }
}