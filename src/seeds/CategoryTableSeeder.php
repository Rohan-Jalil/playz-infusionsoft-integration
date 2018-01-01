<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Holiday Programs',
                'sort_order' => 0,
                'created_at' => '2016-07-22 11:53:51',
                'updated_at' => '2016-07-22 11:53:51',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Classes & Clubs',
                'sort_order' => 1,
                'created_at' => '2016-07-22 11:53:51',
                'updated_at' => '2016-07-22 11:53:51',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Parties',
                'sort_order' => 2,
                'created_at' => '2016-07-22 11:54:13',
                'updated_at' => '2016-07-22 11:54:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Fun Stuff To Do',
                'sort_order' => 3,
                'created_at' => '2016-07-22 11:54:13',
                'updated_at' => '2016-07-22 11:54:13',
            ),
        ));
        
        
    }
}