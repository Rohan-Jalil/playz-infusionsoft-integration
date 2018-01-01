<?php

use Illuminate\Database\Seeder;

class SubCategoryCopyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_category_copy')->delete();
        
        \DB::table('sub_category_copy')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sports',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Arts, crafts & construction',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-08-05 13:02:36',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Performing arts – ie music, drama, dance, modellin',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Screens – computers / films',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'General Kids fun',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Sports',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Arts, crafts & construction',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Performing arts – ie music, drama, dance, modelling',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Screens – computers / films',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'General Kids fun',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Venue',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Entertainment',
                'is_main' => 0,
                'sort_order' => 0,
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Party Supplies (Food, Drink, Costumes, Decorations',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
                13 => 
                array (
                    'id' => 14,
                    'name' => 'Parks, beaches and public spaces',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
                14 => 
                array (
                    'id' => 15,
                    'name' => 'Museums, galleries & libraries',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
                15 => 
                array (
                    'id' => 16,
                    'name' => 'Workshops',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
                16 => 
                array (
                    'id' => 17,
                    'name' => 'Swim centres',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
                17 => 
                array (
                    'id' => 18,
                    'name' => 'Tourist attractions & theme parks',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
                18 => 
                array (
                    'id' => 19,
                    'name' => 'Performances & Shows',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
                19 => 
                array (
                    'id' => 20,
                    'name' => 'Markets',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
                20 => 
                array (
                    'id' => 21,
                    'name' => 'Zoos',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
                21 => 
                array (
                    'id' => 22,
                    'name' => 'Fairs, fetes & festivals',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
                22 => 
                array (
                    'id' => 23,
                    'name' => 'Recreational Centres',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
                23 => 
                array (
                    'id' => 24,
                    'name' => 'Other',
                    'is_main' => 0,
                    'sort_order' => 0,
                    'created_at' => '2016-05-05 13:41:21',
                    'updated_at' => '2016-05-05 13:41:21',
                    'deleted_at' => NULL,
                ),
            ));
        
        
    }
}