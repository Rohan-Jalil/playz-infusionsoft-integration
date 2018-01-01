<?php

use Illuminate\Database\Seeder;

class ProviderTimeslotPriceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provider_timeslot_price')->delete();
        
        \DB::table('provider_timeslot_price')->insert(array (
            0 => 
            array (
                'id' => 109,
                'user_id' => 33,
                'name' => 'Monday 5-6pm private | Rachel\'s Music Hall | Term 4',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            1 => 
            array (
                'id' => 110,
                'user_id' => 33,
                'name' => 'Tuesday 5-6pm private | Rachel\'s Music Hall | Term 4',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            2 => 
            array (
                'id' => 111,
                'user_id' => 33,
                'name' => 'Tuesday 5-6pm private | Rachel\'s Music Hall | Term 4',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            3 => 
            array (
                'id' => 112,
                'user_id' => 33,
                'name' => 'Adult ticket',
                'type' => 'SINGLE',
                'price' => '20.00',
                'is_deleted' => 0,
            ),
            4 => 
            array (
                'id' => 113,
                'user_id' => 33,
                'name' => 'Kids ticket',
                'type' => 'SINGLE',
                'price' => '10.00',
                'is_deleted' => 0,
            ),
            5 => 
            array (
                'id' => 114,
                'user_id' => 33,
                'name' => 'Wednesday Duet classes | Rachel\'s Music Hall | Term 4',
                'type' => 'PACKAGE',
                'price' => '300.00',
                'is_deleted' => 0,
            ),
            6 => 
            array (
                'id' => 115,
                'user_id' => 37,
                'name' => 'Monday | Kids activity providers Headquarters | 1st Week',
                'type' => 'PACKAGE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            7 => 
            array (
                'id' => 116,
                'user_id' => 37,
                'name' => 'Monday | Kids activity providers Headquarters | 1st Week',
                'type' => 'SINGLE',
                'price' => '40.00',
                'is_deleted' => 0,
            ),
            8 => 
            array (
                'id' => 117,
                'user_id' => 38,
                'name' => 'Newbies | Tennis Courts | Term 3 Holidays',
                'type' => 'PACKAGE',
                'price' => '20.00',
                'is_deleted' => 0,
            ),
            9 => 
            array (
                'id' => 118,
                'user_id' => 38,
                'name' => 'Beginners | Tennis Courts | Term 3 Holidays',
                'type' => 'PACKAGE',
                'price' => '30.00',
                'is_deleted' => 0,
            ),
            10 => 
            array (
                'id' => 119,
                'user_id' => 38,
                'name' => 'Advanced | Tennis Courts | Term 3 Holidays',
                'type' => 'SINGLE',
                'price' => '40.00',
                'is_deleted' => 0,
            ),
            11 => 
            array (
                'id' => 120,
                'user_id' => 38,
                'name' => 'Super Advanced | Tennis Courts | Term 3 Holidays',
                'type' => 'PACKAGE',
                'price' => '1200.00',
                'is_deleted' => 0,
            ),
            12 => 
            array (
                'id' => 121,
                'user_id' => 38,
                'name' => 'Oldies Single',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            13 => 
            array (
                'id' => 122,
                'user_id' => 38,
                'name' => 'The Big Event',
                'type' => 'SINGLE',
                'price' => '500.00',
                'is_deleted' => 0,
            ),
            14 => 
            array (
                'id' => 123,
                'user_id' => 38,
            'name' => 'Advanced (Single Ticket)',
                'type' => 'SINGLE',
                'price' => '40.00',
                'is_deleted' => 0,
            ),
            15 => 
            array (
                'id' => 124,
                'user_id' => 38,
                'name' => 'Advanced Package Deal',
                'type' => 'PACKAGE',
                'price' => '500.00',
                'is_deleted' => 0,
            ),
            16 => 
            array (
                'id' => 125,
                'user_id' => 33,
                'name' => 'Friday toddler class | Rachel\'s Music Hall | Term 4',
                'type' => 'PACKAGE',
                'price' => '250.00',
                'is_deleted' => 0,
            ),
            17 => 
            array (
                'id' => 126,
                'user_id' => 33,
                'name' => 'Keyboard beginners Monday 9-10 | Rachel\'s Music Hall | Term 4',
                'type' => 'PACKAGE',
                'price' => '150.00',
                'is_deleted' => 0,
            ),
            18 => 
            array (
                'id' => 127,
                'user_id' => 40,
                'name' => 'Baking cakes | Cooking Company Headquarters | Term 4',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            19 => 
            array (
                'id' => 128,
                'user_id' => 40,
                'name' => 'Delicious Roasts | Cooking Company Headquarters | Term 4',
                'type' => 'PACKAGE',
                'price' => '250.00',
                'is_deleted' => 0,
            ),
            20 => 
            array (
                'id' => 129,
                'user_id' => 40,
                'name' => 'single lesson cooking class',
                'type' => 'SINGLE',
                'price' => '20.00',
                'is_deleted' => 0,
            ),
            21 => 
            array (
                'id' => 130,
                'user_id' => 40,
                'name' => 'single lesson cooking class',
                'type' => 'SINGLE',
                'price' => '20.00',
                'is_deleted' => 0,
            ),
            22 => 
            array (
                'id' => 131,
                'user_id' => 40,
                'name' => 'single lesson cooking class',
                'type' => 'SINGLE',
                'price' => '20.00',
                'is_deleted' => 0,
            ),
            23 => 
            array (
                'id' => 132,
                'user_id' => 40,
                'name' => 'private lesson | Cooking Company Headquarters | Term 4',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            24 => 
            array (
                'id' => 133,
                'user_id' => 40,
                'name' => 'Baking cakes | Cooking Company Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '250.00',
                'is_deleted' => 0,
            ),
            25 => 
            array (
                'id' => 134,
                'user_id' => 40,
                'name' => 'Delicious Roasts | Cooking Company Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '300.00',
                'is_deleted' => 0,
            ),
            26 => 
            array (
                'id' => 135,
                'user_id' => 40,
                'name' => 'private lesson | Cooking Company Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            27 => 
            array (
                'id' => 136,
                'user_id' => 40,
                'name' => 'Basic Party',
                'type' => 'SINGLE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            28 => 
            array (
                'id' => 137,
                'user_id' => 40,
                'name' => 'Gourmet Party',
                'type' => 'SINGLE',
                'price' => '300.00',
                'is_deleted' => 0,
            ),
            29 => 
            array (
                'id' => 138,
                'user_id' => 40,
                'name' => 'Elite Party',
                'type' => 'SINGLE',
                'price' => '400.00',
                'is_deleted' => 0,
            ),
            30 => 
            array (
                'id' => 139,
                'user_id' => 40,
                'name' => 'chocolate cake',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            31 => 
            array (
                'id' => 140,
                'user_id' => 40,
                'name' => 'rainbow cake',
                'type' => 'SINGLE',
                'price' => '60.00',
                'is_deleted' => 0,
            ),
            32 => 
            array (
                'id' => 141,
                'user_id' => 41,
                'name' => 'Junior ballet | Dance Academy Headquarters | Term 4 2018',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            33 => 
            array (
                'id' => 142,
                'user_id' => 41,
                'name' => 'private jazz tuition | Dance Academy Headquarters | Term 4 2018',
                'type' => 'PACKAGE',
                'price' => '250.00',
                'is_deleted' => 0,
            ),
            34 => 
            array (
                'id' => 143,
                'user_id' => 41,
                'name' => 'ad-hoc dance class 1 hour',
                'type' => 'SINGLE',
                'price' => '15.00',
                'is_deleted' => 0,
            ),
            35 => 
            array (
                'id' => 144,
                'user_id' => 42,
                'name' => 'Adult',
                'type' => 'SINGLE',
                'price' => '20.00',
                'is_deleted' => 0,
            ),
            36 => 
            array (
                'id' => 145,
                'user_id' => 42,
                'name' => 'Kids',
                'type' => 'SINGLE',
                'price' => '10.00',
                'is_deleted' => 0,
            ),
            37 => 
            array (
                'id' => 146,
                'user_id' => 42,
                'name' => 'Family - 2 adults 2 Kids',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            38 => 
            array (
                'id' => 147,
                'user_id' => 33,
                'name' => 'Music Holiday Program - week 1 | Rachel\'s Music Hall | EOY Holidays 2017',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            39 => 
            array (
                'id' => 148,
                'user_id' => 33,
                'name' => 'holiday program - day price',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            40 => 
            array (
                'id' => 149,
                'user_id' => 33,
                'name' => 'holiday program - day price',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            41 => 
            array (
                'id' => 150,
                'user_id' => 45,
                'name' => 'Daily Session',
                'type' => 'SINGLE',
                'price' => '70.00',
                'is_deleted' => 0,
            ),
            42 => 
            array (
                'id' => 151,
                'user_id' => 45,
                'name' => 'Weekly Holiday Package',
                'type' => 'PACKAGE',
                'price' => '400.00',
                'is_deleted' => 0,
            ),
            43 => 
            array (
                'id' => 152,
                'user_id' => 45,
                'name' => 'Cricket Skills Clinic | Pitcher Park Alphington | Term 3',
                'type' => 'SINGLE',
                'price' => '25.00',
                'is_deleted' => 0,
            ),
            44 => 
            array (
                'id' => 153,
                'user_id' => 45,
                'name' => 'Cricket Skills Clinic | Pitcher Park Alphington | Term 3',
                'type' => 'PACKAGE',
                'price' => '150.00',
                'is_deleted' => 0,
            ),
            45 => 
            array (
                'id' => 154,
                'user_id' => 40,
            'name' => 'Saturday night party (10 people)',
                'type' => 'SINGLE',
                'price' => '300.00',
                'is_deleted' => 0,
            ),
            46 => 
            array (
                'id' => 155,
                'user_id' => 40,
            'name' => 'Sunday Night Party (10 people)',
                'type' => 'SINGLE',
                'price' => '300.00',
                'is_deleted' => 0,
            ),
            47 => 
            array (
                'id' => 156,
                'user_id' => 33,
                'name' => 'Music Holiday Program - week 1 | Rachel\'s Music Hall | EOY Holidays 2017',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            48 => 
            array (
                'id' => 157,
                'user_id' => 33,
                'name' => 'Music Holiday Program - week 1 | Rachel\'s Music Hall | EOY Holidays 2017',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            49 => 
            array (
                'id' => 158,
                'user_id' => 33,
                'name' => 'Music Holiday Program - week 1 | Rachel\'s Music Hall | EOY Holidays 2017',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            50 => 
            array (
                'id' => 159,
                'user_id' => 33,
                'name' => 'Music Day Program | Rachel\'s Music Hall | Week 1 EOY holidays',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            51 => 
            array (
                'id' => 160,
                'user_id' => 33,
                'name' => 'Music Day Program - single day',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            52 => 
            array (
                'id' => 161,
                'user_id' => 33,
                'name' => 'Music Day Program - single day',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            53 => 
            array (
                'id' => 162,
                'user_id' => 33,
                'name' => '5 day holiday program',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            54 => 
            array (
                'id' => 163,
                'user_id' => 49,
                'name' => 'Term Pricing',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            55 => 
            array (
                'id' => 164,
                'user_id' => 49,
                'name' => 'Term Pricing',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            56 => 
            array (
                'id' => 165,
                'user_id' => 49,
                'name' => 'Term Pricing',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            57 => 
            array (
                'id' => 166,
                'user_id' => 49,
                'name' => 'Term Pricing',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            58 => 
            array (
                'id' => 167,
                'user_id' => 49,
                'name' => 'Term Pricing',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            59 => 
            array (
                'id' => 168,
                'user_id' => 49,
                'name' => 'Term Pricing',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            60 => 
            array (
                'id' => 169,
                'user_id' => 49,
                'name' => 'term fees',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            61 => 
            array (
                'id' => 170,
                'user_id' => 49,
                'name' => 'term fees',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            62 => 
            array (
                'id' => 171,
                'user_id' => 49,
                'name' => 'term fees',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            63 => 
            array (
                'id' => 172,
                'user_id' => 49,
                'name' => 'term fees',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            64 => 
            array (
                'id' => 173,
                'user_id' => 49,
                'name' => 'term fees',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            65 => 
            array (
                'id' => 174,
                'user_id' => 49,
                'name' => 'term fees',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            66 => 
            array (
                'id' => 175,
                'user_id' => 49,
                'name' => 'term fees',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            67 => 
            array (
                'id' => 176,
                'user_id' => 49,
                'name' => 'single class',
                'type' => 'SINGLE',
                'price' => '20.00',
                'is_deleted' => 0,
            ),
            68 => 
            array (
                'id' => 177,
                'user_id' => 41,
                'name' => 'Junior Tap | Dance Academy Headquarters | Term 4 2018',
                'type' => 'PACKAGE',
                'price' => '250.00',
                'is_deleted' => 0,
            ),
            69 => 
            array (
                'id' => 178,
                'user_id' => 41,
                'name' => 'Single class',
                'type' => 'SINGLE',
                'price' => '30.00',
                'is_deleted' => 0,
            ),
            70 => 
            array (
                'id' => 179,
                'user_id' => 41,
                'name' => 'Single class',
                'type' => 'SINGLE',
                'price' => '30.00',
                'is_deleted' => 0,
            ),
            71 => 
            array (
                'id' => 180,
                'user_id' => 41,
                'name' => 'Single class',
                'type' => 'SINGLE',
                'price' => '30.00',
                'is_deleted' => 0,
            ),
            72 => 
            array (
                'id' => 181,
                'user_id' => 41,
                'name' => 'Mixed Tap | Dance Academy Headquarters | Term 4 2018',
                'type' => 'PACKAGE',
                'price' => '250.00',
                'is_deleted' => 0,
            ),
            73 => 
            array (
                'id' => 182,
                'user_id' => 41,
                'name' => 'Private Tap Tuition | Dance Academy Headquarters | Term 4 2018',
                'type' => 'PACKAGE',
                'price' => '350.00',
                'is_deleted' => 0,
            ),
            74 => 
            array (
                'id' => 183,
                'user_id' => 41,
                'name' => 'Tap Practice Sessions | Dance Academy Headquarters | Term 4 2018',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            75 => 
            array (
                'id' => 184,
                'user_id' => 41,
                'name' => 'Tap Practice Session',
                'type' => 'SINGLE',
                'price' => '10.00',
                'is_deleted' => 0,
            ),
            76 => 
            array (
                'id' => 185,
                'user_id' => 45,
                'name' => 'Beginner\'s cricket skills',
                'type' => 'SINGLE',
                'price' => '40.00',
                'is_deleted' => 0,
            ),
            77 => 
            array (
                'id' => 186,
                'user_id' => 41,
                'name' => 'test price point',
                'type' => 'SINGLE',
                'price' => '15.00',
                'is_deleted' => 0,
            ),
            78 => 
            array (
                'id' => 187,
                'user_id' => 41,
                'name' => 'Junior Tap | Dance Academy Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            79 => 
            array (
                'id' => 188,
                'user_id' => 41,
                'name' => 'Mixed Tap | Dance Academy Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '250.00',
                'is_deleted' => 0,
            ),
            80 => 
            array (
                'id' => 189,
                'user_id' => 41,
                'name' => 'Private Tap Tuition | Dance Academy Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '350.00',
                'is_deleted' => 0,
            ),
            81 => 
            array (
                'id' => 190,
                'user_id' => 41,
                'name' => 'Tap Practice Sessions | Dance Academy Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            82 => 
            array (
                'id' => 191,
                'user_id' => 33,
                'name' => 'Keyboard for beginners | Rachel\'s Music Hall | Term 4',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            83 => 
            array (
                'id' => 192,
                'user_id' => 33,
                'name' => 'single session',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            84 => 
            array (
                'id' => 193,
                'user_id' => 51,
                'name' => 'Week Programme',
                'type' => 'PACKAGE',
                'price' => '250.00',
                'is_deleted' => 0,
            ),
            85 => 
            array (
                'id' => 194,
                'user_id' => 45,
                'name' => 'Intermediate Cricket skills | Pitcher Park Alphington | Term 4 2018',
                'type' => 'SINGLE',
                'price' => '20.00',
                'is_deleted' => 0,
            ),
            86 => 
            array (
                'id' => 195,
                'user_id' => 45,
                'name' => 'Intermediate Cricket skills | Pitcher Park Alphington | Term 4 2018',
                'type' => 'PACKAGE',
                'price' => '180.00',
                'is_deleted' => 0,
            ),
            87 => 
            array (
                'id' => 196,
                'user_id' => 45,
                'name' => 'Beginner Netball skills | Pitcher Park Alphington | Term 4 2018',
                'type' => 'SINGLE',
                'price' => '30.00',
                'is_deleted' => 0,
            ),
            88 => 
            array (
                'id' => 197,
                'user_id' => 45,
                'name' => 'Beginner Netball skills | Pitcher Park Alphington | Term 4 2018',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            89 => 
            array (
                'id' => 198,
                'user_id' => 45,
                'name' => 'Netball Advanced SKills | Pitcher Park Alphington | Term 3',
                'type' => 'SINGLE',
                'price' => '25.00',
                'is_deleted' => 0,
            ),
            90 => 
            array (
                'id' => 199,
                'user_id' => 45,
                'name' => 'Netball Advanced SKills | Pitcher Park Alphington | Term 3',
                'type' => 'PACKAGE',
                'price' => '250.00',
                'is_deleted' => 0,
            ),
            91 => 
            array (
                'id' => 200,
                'user_id' => 45,
                'name' => 'Super Duper soccer Skills clinic | Pitcher Park Alphington | Christmas  Holidays',
                'type' => 'PACKAGE',
                'price' => '900.00',
                'is_deleted' => 0,
            ),
            92 => 
            array (
                'id' => 201,
                'user_id' => 33,
                'name' => 'test price for week 1',
                'type' => 'SINGLE',
                'price' => '20.00',
                'is_deleted' => 0,
            ),
            93 => 
            array (
                'id' => 202,
                'user_id' => 33,
                'name' => 'test price week 1',
                'type' => 'SINGLE',
                'price' => '30.00',
                'is_deleted' => 0,
            ),
            94 => 
            array (
                'id' => 203,
                'user_id' => 33,
                'name' => 'Private keyboard class - Monday | Rachel\'s Music Hall | Term 4',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            95 => 
            array (
                'id' => 204,
                'user_id' => 54,
                'name' => 'Expensive',
                'type' => 'SINGLE',
                'price' => '100.00',
                'is_deleted' => 0,
            ),
            96 => 
            array (
                'id' => 205,
                'user_id' => 33,
                'name' => 'Monday theory class | Rachel\'s Music Hall | Term 4',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            97 => 
            array (
                'id' => 206,
                'user_id' => 33,
                'name' => 'single lesson',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            98 => 
            array (
                'id' => 207,
                'user_id' => 33,
                'name' => 'Tuesday Theory Class | Rachel\'s Music Hall | Term 4',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            99 => 
            array (
                'id' => 208,
                'user_id' => 58,
                'name' => 'test',
                'type' => 'SINGLE',
                'price' => '10.00',
                'is_deleted' => 0,
            ),
            100 => 
            array (
                'id' => 209,
                'user_id' => 33,
                'name' => 'Monday 5-6pm private | Rachel\'s Music Hall | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            101 => 
            array (
                'id' => 210,
                'user_id' => 33,
                'name' => 'Tuesday 5-6pm private | Rachel\'s Music Hall | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            102 => 
            array (
                'id' => 211,
                'user_id' => 33,
                'name' => 'Wednesday Duet classes | Rachel\'s Music Hall | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '300.00',
                'is_deleted' => 0,
            ),
            103 => 
            array (
                'id' => 212,
                'user_id' => 33,
                'name' => 'Friday toddler class | Rachel\'s Music Hall | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '275.00',
                'is_deleted' => 0,
            ),
            104 => 
            array (
                'id' => 213,
                'user_id' => 33,
                'name' => 'Music Day Program | Rachel\'s Music Hall | Summer Holidays 2018',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            105 => 
            array (
                'id' => 214,
                'user_id' => 33,
                'name' => 'Day Session',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            106 => 
            array (
                'id' => 215,
                'user_id' => 33,
                'name' => 'Day Session',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            107 => 
            array (
                'id' => 216,
                'user_id' => 59,
                'name' => 'Full Day Program',
                'type' => 'SINGLE',
                'price' => '75.00',
                'is_deleted' => 0,
            ),
            108 => 
            array (
                'id' => 217,
                'user_id' => 59,
                'name' => 'Half Day Program',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            109 => 
            array (
                'id' => 218,
                'user_id' => 60,
                'name' => 'Monday Private Class | Magic Music Lessons Headquarters | Term 4 2017',
                'type' => 'PACKAGE',
                'price' => '275.00',
                'is_deleted' => 0,
            ),
            110 => 
            array (
                'id' => 219,
                'user_id' => 60,
                'name' => 'single lesson - 45 minutes',
                'type' => 'SINGLE',
                'price' => '50.00',
                'is_deleted' => 0,
            ),
            111 => 
            array (
                'id' => 220,
                'user_id' => 60,
                'name' => 'single lesson - 60 minutes',
                'type' => 'SINGLE',
                'price' => '60.00',
                'is_deleted' => 0,
            ),
            112 => 
            array (
                'id' => 221,
                'user_id' => 61,
                'name' => 'Beginners Cricket Skills | Pitcher Park | Term 1 2018',
                'type' => 'SINGLE',
                'price' => '25.00',
                'is_deleted' => 0,
            ),
            113 => 
            array (
                'id' => 222,
                'user_id' => 61,
                'name' => 'Beginners Cricket Skills | Pitcher Park | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            114 => 
            array (
                'id' => 223,
                'user_id' => 61,
                'name' => 'Daily event',
                'type' => 'SINGLE',
                'price' => '150.00',
                'is_deleted' => 0,
            ),
            115 => 
            array (
                'id' => 224,
                'user_id' => 64,
                'name' => 'Full Day',
                'type' => 'SINGLE',
                'price' => '75.00',
                'is_deleted' => 0,
            ),
            116 => 
            array (
                'id' => 225,
                'user_id' => 65,
                'name' => 'Monday 5 - 6pm | Penny\'s Piano Lessons Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '300.00',
                'is_deleted' => 0,
            ),
            117 => 
            array (
                'id' => 226,
                'user_id' => 65,
                'name' => 'Friday 5-6pm | Penny\'s Piano Lessons Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '300.00',
                'is_deleted' => 0,
            ),
            118 => 
            array (
                'id' => 227,
                'user_id' => 65,
                'name' => 'Friday 5-6pm | Penny\'s Piano Lessons Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '300.00',
                'is_deleted' => 0,
            ),
            119 => 
            array (
                'id' => 228,
                'user_id' => 65,
                'name' => 'Wednesday piano lesson | Penny\'s Piano Lessons Headquarters | Term 2 2018',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            120 => 
            array (
                'id' => 229,
                'user_id' => 65,
                'name' => 'concert ticket',
                'type' => 'SINGLE',
                'price' => '10.00',
                'is_deleted' => 0,
            ),
            121 => 
            array (
                'id' => 230,
                'user_id' => 65,
                'name' => 'Monday 5 - 6pm | Penny\'s Piano Lessons Headquarters | Term 2 2018',
                'type' => 'PACKAGE',
                'price' => '200.00',
                'is_deleted' => 0,
            ),
            122 => 
            array (
                'id' => 231,
                'user_id' => 65,
                'name' => 'Friday 5-6pm | Penny\'s Piano Lessons Headquarters | Term 2 2018',
                'type' => 'PACKAGE',
                'price' => '275.00',
                'is_deleted' => 0,
            ),
            123 => 
            array (
                'id' => 232,
                'user_id' => 65,
                'name' => 'Tuesday 5-6pm ',
                'type' => 'PACKAGE',
                'price' => '250.00',
                'is_deleted' => 0,
            ),
            124 => 
            array (
                'id' => 233,
                'user_id' => 71,
                'name' => 'Test | Test Headquarters | Term 1 2018',
                'type' => 'SINGLE',
                'price' => '1.00',
                'is_deleted' => 0,
            ),
            125 => 
            array (
                'id' => 234,
                'user_id' => 71,
                'name' => 'Test | Test Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '1.00',
                'is_deleted' => 0,
            ),
            126 => 
            array (
                'id' => 235,
                'user_id' => 65,
                'name' => 'Wednesday Duet Classes 1 | Penny\'s Piano Lessons Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '150.00',
                'is_deleted' => 0,
            ),
            127 => 
            array (
                'id' => 236,
                'user_id' => 65,
                'name' => 'Wednesday Duet Classes 1 | Penny\'s Piano Lessons Headquarters | Term 1 2018',
                'type' => 'PACKAGE',
                'price' => '150.00',
                'is_deleted' => 0,
            ),
            128 => 
            array (
                'id' => 237,
                'user_id' => 75,
                'name' => '12 and Under',
                'type' => 'SINGLE',
                'price' => '1.00',
                'is_deleted' => 0,
            ),
            129 => 
            array (
                'id' => 238,
                'user_id' => 75,
                'name' => '13+',
                'type' => 'SINGLE',
                'price' => '1.00',
                'is_deleted' => 0,
            ),
        ));
        
        
    }
}