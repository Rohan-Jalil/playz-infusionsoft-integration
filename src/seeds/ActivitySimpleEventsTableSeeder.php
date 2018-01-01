<?php

use Illuminate\Database\Seeder;

class ActivitySimpleEventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_simple_events')->delete();
        
        \DB::table('activity_simple_events')->insert(array (
            0 => 
            array (
                'id' => 2,
                'activity_id' => 2,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            1 => 
            array (
                'id' => 3,
                'activity_id' => 7,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            2 => 
            array (
                'id' => 4,
                'activity_id' => 7,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '2',
            ),
            3 => 
            array (
                'id' => 5,
                'activity_id' => 7,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '3',
            ),
            4 => 
            array (
                'id' => 6,
                'activity_id' => 7,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '4',
            ),
            5 => 
            array (
                'id' => 7,
                'activity_id' => 7,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '5',
            ),
            6 => 
            array (
                'id' => 11,
                'activity_id' => 12,
                'start' => '09:00 am',
                'end' => '10:00 am',
                'selected_days' => '1',
            ),
            7 => 
            array (
                'id' => 12,
                'activity_id' => 10,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            8 => 
            array (
                'id' => 13,
                'activity_id' => 10,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '2',
            ),
            9 => 
            array (
                'id' => 16,
                'activity_id' => 34,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            10 => 
            array (
                'id' => 17,
                'activity_id' => 34,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '2',
            ),
            11 => 
            array (
                'id' => 18,
                'activity_id' => 35,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            12 => 
            array (
                'id' => 19,
                'activity_id' => 35,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '2',
            ),
            13 => 
            array (
                'id' => 20,
                'activity_id' => 35,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '3',
            ),
            14 => 
            array (
                'id' => 21,
                'activity_id' => 35,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '4',
            ),
            15 => 
            array (
                'id' => 22,
                'activity_id' => 35,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '5',
            ),
            16 => 
            array (
                'id' => 25,
                'activity_id' => 37,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '0',
            ),
            17 => 
            array (
                'id' => 26,
                'activity_id' => 37,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '6',
            ),
            18 => 
            array (
                'id' => 27,
                'activity_id' => 38,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            19 => 
            array (
                'id' => 30,
                'activity_id' => 51,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            20 => 
            array (
                'id' => 31,
                'activity_id' => 51,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '2',
            ),
            21 => 
            array (
                'id' => 32,
                'activity_id' => 64,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            22 => 
            array (
                'id' => 33,
                'activity_id' => 64,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '2',
            ),
            23 => 
            array (
                'id' => 34,
                'activity_id' => 64,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '3',
            ),
            24 => 
            array (
                'id' => 35,
                'activity_id' => 64,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '4',
            ),
            25 => 
            array (
                'id' => 36,
                'activity_id' => 64,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '5',
            ),
            26 => 
            array (
                'id' => 41,
                'activity_id' => 65,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            27 => 
            array (
                'id' => 42,
                'activity_id' => 65,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '3',
            ),
            28 => 
            array (
                'id' => 43,
                'activity_id' => 65,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '5',
            ),
            29 => 
            array (
                'id' => 44,
                'activity_id' => 68,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            30 => 
            array (
                'id' => 45,
                'activity_id' => 70,
                'start' => '11:00 am',
                'end' => '03:00 pm',
                'selected_days' => '3',
            ),
            31 => 
            array (
                'id' => 46,
                'activity_id' => 70,
                'start' => '11:00 am',
                'end' => '03:00 pm',
                'selected_days' => '4',
            ),
            32 => 
            array (
                'id' => 47,
                'activity_id' => 70,
                'start' => '11:00 am',
                'end' => '03:00 pm',
                'selected_days' => '5',
            ),
            33 => 
            array (
                'id' => 50,
                'activity_id' => 77,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            34 => 
            array (
                'id' => 51,
                'activity_id' => 77,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '2',
            ),
            35 => 
            array (
                'id' => 52,
                'activity_id' => 77,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '3',
            ),
            36 => 
            array (
                'id' => 53,
                'activity_id' => 76,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            37 => 
            array (
                'id' => 54,
                'activity_id' => 76,
                'start' => '10:00 am',
                'end' => '05:00 pm',
                'selected_days' => '2',
            ),
            38 => 
            array (
                'id' => 55,
                'activity_id' => 82,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            39 => 
            array (
                'id' => 56,
                'activity_id' => 87,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            40 => 
            array (
                'id' => 57,
                'activity_id' => 93,
                'start' => '09:00 am',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            41 => 
            array (
                'id' => 58,
                'activity_id' => 96,
                'start' => '04:00 pm',
                'end' => '05:00 pm',
                'selected_days' => '1',
            ),
            42 => 
            array (
                'id' => 59,
                'activity_id' => 96,
                'start' => '04:00 pm',
                'end' => '05:00 pm',
                'selected_days' => '3',
            ),
        ));
        
        
    }
}