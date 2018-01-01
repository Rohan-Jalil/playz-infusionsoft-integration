<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Arabic',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Cantonese',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Croatian',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dutch',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'English',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'French',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'German',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Greek',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Hebrew',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Hindi',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Hungarian',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Indonesian',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Italian',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Japanese',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Korean',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Macedonian',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Maltese',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Mandarin',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Netherlandic',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Persian',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Polish',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Portuguese',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Russian',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Samoan',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Serbian',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Sinhalese',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Spanish',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            27 => 
            array (
                'id' => 28,
            'name' => 'Tagalog (Filipino)',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Tamil',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Turkish',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Vietnamese',
                'created_at' => '2016-05-05 13:41:21',
                'updated_at' => '2016-05-05 13:41:21',
            ),
        ));
        
        
    }
}