<?php

use Illuminate\Database\Seeder;

class PeopleMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('people_meta')->delete();
        
        \DB::table('people_meta')->insert(array (
            0 => 
            array (
                'id' => 1,
                'people_id' => 391,
                'key' => 'event_id',
                'value' => '3981',
                'is_json' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'people_id' => 391,
                'key' => 'provider_timeslot_price_id',
                'value' => '225',
                'is_json' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'people_id' => 391,
                'key' => 'has_quick_saved',
                'value' => 'true',
                'is_json' => 1,
            ),
            3 => 
            array (
                'id' => 22,
                'people_id' => 405,
                'key' => 'event_id',
                'value' => '4395',
                'is_json' => 0,
            ),
            4 => 
            array (
                'id' => 23,
                'people_id' => 405,
                'key' => 'provider_timeslot_price_id',
                'value' => '233',
                'is_json' => 0,
            ),
            5 => 
            array (
                'id' => 31,
                'people_id' => 388,
                'key' => 'enrolfield_1',
                'value' => 'Nathan',
                'is_json' => 0,
            ),
            6 => 
            array (
                'id' => 32,
                'people_id' => 388,
                'key' => 'enrolfield_2',
                'value' => 'Sharp',
                'is_json' => 0,
            ),
            7 => 
            array (
                'id' => 33,
                'people_id' => 388,
                'key' => 'enrolfield_3',
                'value' => 'Natsa',
                'is_json' => 0,
            ),
            8 => 
            array (
                'id' => 34,
                'people_id' => 388,
                'key' => 'enrolfield_4',
                'value' => '29-08-2001',
                'is_json' => 0,
            ),
            9 => 
            array (
                'id' => 42,
                'people_id' => 389,
                'key' => 'enrolfield_1',
                'value' => 'Domi',
                'is_json' => 0,
            ),
            10 => 
            array (
                'id' => 43,
                'people_id' => 389,
                'key' => 'enrolfield_2',
                'value' => 'Sharp',
                'is_json' => 0,
            ),
            11 => 
            array (
                'id' => 44,
                'people_id' => 389,
                'key' => 'enrolfield_3',
                'value' => 'Dom',
                'is_json' => 0,
            ),
            12 => 
            array (
                'id' => 45,
                'people_id' => 389,
                'key' => 'enrolfield_4',
                'value' => '19-05-2008',
                'is_json' => 0,
            ),
            13 => 
            array (
                'id' => 46,
                'people_id' => 408,
                'key' => 'event_id',
                'value' => '4458',
                'is_json' => 0,
            ),
            14 => 
            array (
                'id' => 47,
                'people_id' => 408,
                'key' => 'provider_timeslot_price_id',
                'value' => '237',
                'is_json' => 0,
            ),
            15 => 
            array (
                'id' => 48,
                'people_id' => 408,
                'key' => 'has_quick_saved',
                'value' => 'true',
                'is_json' => 1,
            ),
            16 => 
            array (
                'id' => 49,
                'people_id' => 408,
                'key' => 'enrolfield_1',
                'value' => 'Nathan',
                'is_json' => 0,
            ),
            17 => 
            array (
                'id' => 50,
                'people_id' => 408,
                'key' => 'enrolfield_2',
                'value' => 'Sharp',
                'is_json' => 0,
            ),
            18 => 
            array (
                'id' => 51,
                'people_id' => 408,
                'key' => 'enrolfield_3',
                'value' => 'Natsa',
                'is_json' => 0,
            ),
            19 => 
            array (
                'id' => 52,
                'people_id' => 408,
                'key' => 'enrolfield_4',
                'value' => '29-08-2001',
                'is_json' => 0,
            ),
            20 => 
            array (
                'id' => 53,
                'people_id' => 408,
                'key' => 'has_completed',
                'value' => 'true',
                'is_json' => 1,
            ),
            21 => 
            array (
                'id' => 54,
                'people_id' => 409,
                'key' => 'event_id',
                'value' => '4458',
                'is_json' => 0,
            ),
            22 => 
            array (
                'id' => 55,
                'people_id' => 409,
                'key' => 'provider_timeslot_price_id',
                'value' => '237',
                'is_json' => 0,
            ),
            23 => 
            array (
                'id' => 56,
                'people_id' => 409,
                'key' => 'has_quick_saved',
                'value' => 'true',
                'is_json' => 1,
            ),
            24 => 
            array (
                'id' => 57,
                'people_id' => 409,
                'key' => 'enrolfield_1',
                'value' => 'Domi',
                'is_json' => 0,
            ),
            25 => 
            array (
                'id' => 58,
                'people_id' => 409,
                'key' => 'enrolfield_2',
                'value' => 'Sharp',
                'is_json' => 0,
            ),
            26 => 
            array (
                'id' => 59,
                'people_id' => 409,
                'key' => 'enrolfield_3',
                'value' => 'Dom',
                'is_json' => 0,
            ),
            27 => 
            array (
                'id' => 60,
                'people_id' => 409,
                'key' => 'enrolfield_4',
                'value' => '19-05-2008',
                'is_json' => 0,
            ),
            28 => 
            array (
                'id' => 61,
                'people_id' => 409,
                'key' => 'has_completed',
                'value' => 'true',
                'is_json' => 1,
            ),
            29 => 
            array (
                'id' => 62,
                'people_id' => 408,
                'key' => 'additional_items_on_event',
                'value' => '[{"item_id":83,"item_name":"","price":"0.00","quantity":"1"}]',
                'is_json' => 1,
            ),
            30 => 
            array (
                'id' => 63,
                'people_id' => 410,
                'key' => 'event_id',
                'value' => '4409',
                'is_json' => 0,
            ),
            31 => 
            array (
                'id' => 64,
                'people_id' => 410,
                'key' => 'provider_timeslot_price_id',
                'value' => '237',
                'is_json' => 0,
            ),
            32 => 
            array (
                'id' => 65,
                'people_id' => 410,
                'key' => 'enrolfield_1',
                'value' => 'Lucy',
                'is_json' => 0,
            ),
            33 => 
            array (
                'id' => 66,
                'people_id' => 410,
                'key' => 'enrolfield_2',
                'value' => 'Sharp',
                'is_json' => 0,
            ),
            34 => 
            array (
                'id' => 67,
                'people_id' => 410,
                'key' => 'enrolfield_3',
                'value' => 'Lucy',
                'is_json' => 0,
            ),
            35 => 
            array (
                'id' => 68,
                'people_id' => 410,
                'key' => 'enrolfield_4',
                'value' => '19-05-2008',
                'is_json' => 0,
            ),
            36 => 
            array (
                'id' => 69,
                'people_id' => 410,
                'key' => 'has_completed',
                'value' => 'true',
                'is_json' => 1,
            ),
            37 => 
            array (
                'id' => 70,
                'people_id' => 390,
                'key' => 'enrolfield_1',
                'value' => 'Lucy',
                'is_json' => 0,
            ),
            38 => 
            array (
                'id' => 71,
                'people_id' => 390,
                'key' => 'enrolfield_2',
                'value' => 'Sharp',
                'is_json' => 0,
            ),
            39 => 
            array (
                'id' => 72,
                'people_id' => 390,
                'key' => 'enrolfield_3',
                'value' => 'Lucy',
                'is_json' => 0,
            ),
            40 => 
            array (
                'id' => 73,
                'people_id' => 390,
                'key' => 'enrolfield_4',
                'value' => '19-05-2008',
                'is_json' => 0,
            ),
            41 => 
            array (
                'id' => 74,
                'people_id' => 411,
                'key' => 'event_id',
                'value' => '4409',
                'is_json' => 0,
            ),
            42 => 
            array (
                'id' => 75,
                'people_id' => 411,
                'key' => 'provider_timeslot_price_id',
                'value' => '238',
                'is_json' => 0,
            ),
            43 => 
            array (
                'id' => 76,
                'people_id' => 411,
                'key' => 'has_quick_saved',
                'value' => 'true',
                'is_json' => 1,
            ),
            44 => 
            array (
                'id' => 77,
                'people_id' => 411,
                'key' => 'enrolfield_1',
                'value' => 'Domi',
                'is_json' => 0,
            ),
            45 => 
            array (
                'id' => 78,
                'people_id' => 411,
                'key' => 'enrolfield_2',
                'value' => 'Sharp',
                'is_json' => 0,
            ),
            46 => 
            array (
                'id' => 79,
                'people_id' => 411,
                'key' => 'enrolfield_3',
                'value' => 'Dom',
                'is_json' => 0,
            ),
            47 => 
            array (
                'id' => 80,
                'people_id' => 411,
                'key' => 'enrolfield_4',
                'value' => '19-05-2008',
                'is_json' => 0,
            ),
            48 => 
            array (
                'id' => 81,
                'people_id' => 411,
                'key' => 'has_completed',
                'value' => 'true',
                'is_json' => 1,
            ),
            49 => 
            array (
                'id' => 82,
                'people_id' => 410,
                'key' => 'additional_items_on_event',
                'value' => '[{"item_id":83,"item_name":"","price":"0.00","quantity":"1"}]',
                'is_json' => 1,
            ),
            50 => 
            array (
                'id' => 83,
                'people_id' => 410,
                'key' => 'has_quick_saved',
                'value' => 'true',
                'is_json' => 1,
            ),
            51 => 
            array (
                'id' => 84,
                'people_id' => 412,
                'key' => 'event_id',
                'value' => '4458',
                'is_json' => 0,
            ),
            52 => 
            array (
                'id' => 85,
                'people_id' => 412,
                'key' => 'provider_timeslot_price_id',
                'value' => '237',
                'is_json' => 0,
            ),
            53 => 
            array (
                'id' => 86,
                'people_id' => 412,
                'key' => 'has_quick_saved',
                'value' => 'true',
                'is_json' => 1,
            ),
            54 => 
            array (
                'id' => 87,
                'people_id' => 412,
                'key' => 'enrolfield_1',
                'value' => 'Nathan',
                'is_json' => 0,
            ),
            55 => 
            array (
                'id' => 88,
                'people_id' => 412,
                'key' => 'enrolfield_2',
                'value' => 'Sharp',
                'is_json' => 0,
            ),
            56 => 
            array (
                'id' => 89,
                'people_id' => 412,
                'key' => 'enrolfield_3',
                'value' => 'Natsa',
                'is_json' => 0,
            ),
            57 => 
            array (
                'id' => 90,
                'people_id' => 412,
                'key' => 'enrolfield_4',
                'value' => '29-08-2001',
                'is_json' => 0,
            ),
            58 => 
            array (
                'id' => 91,
                'people_id' => 412,
                'key' => 'has_completed',
                'value' => 'true',
                'is_json' => 1,
            ),
            59 => 
            array (
                'id' => 92,
                'people_id' => 412,
                'key' => 'additional_items_on_event',
                'value' => '[]',
                'is_json' => 1,
            ),
        ));
        
        
    }
}