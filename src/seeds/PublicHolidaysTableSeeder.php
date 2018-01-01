<?php

use Illuminate\Database\Seeder;

class PublicHolidaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('public_holidays')->delete();
        
        \DB::table('public_holidays')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'New Year\'s Day',
                'state' => 'ALL',
                'year' => 2018,
                'date' => '2018-01-01 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:31:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Australia Day',
                'state' => 'ALL',
                'year' => 2018,
                'date' => '2018-01-26 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:34:57',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'March public holiday',
                'state' => 'SA',
                'year' => 2018,
                'date' => '2018-03-12 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:36:48',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Canberra Day',
                'state' => 'ACT',
                'year' => 2018,
                'date' => '2018-03-12 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:43:48',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Eight Hours Day',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-03-12 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:44:22',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Labour Day',
                'state' => 'VIC',
                'year' => 2018,
                'date' => '2018-03-12 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:44:42',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Good Friday',
                'state' => 'ALL',
                'year' => 2018,
                'date' => '2018-03-30 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:45:17',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Easter Saturday',
                'state' => 'ACT',
                'year' => 2018,
                'date' => '2018-03-31 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:46:37',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Easter Saturday',
                'state' => 'NSW',
                'year' => 2018,
                'date' => '2018-03-31 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:48:12',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Easter Saturday',
                'state' => 'SA',
                'year' => 2018,
                'date' => '2018-03-31 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:47:43',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Easter Saturday',
                'state' => 'VIC',
                'year' => 2018,
                'date' => '2018-03-31 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:47:24',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Easter Saturday',
                'state' => 'QLD',
                'year' => 2018,
                'date' => '2018-03-31 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:47:03',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Easter Saturday',
                'state' => 'NT',
                'year' => 2018,
                'date' => '2018-03-31 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:46:08',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Easter Sunday',
                'state' => 'ACT',
                'year' => 2018,
                'date' => '2018-04-01 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:50:31',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Easter Sunday',
                'state' => 'NSW',
                'year' => 2018,
                'date' => '2018-04-01 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:49:41',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'Easter Sunday',
                'state' => 'VIC',
                'year' => 2018,
                'date' => '2018-04-01 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:50:05',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Easter Monday',
                'state' => 'ALL',
                'year' => 2018,
                'date' => '2018-04-02 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:51:06',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Easter Tuesday',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-04-03 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:52:33',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'Anzac Day',
                'state' => 'ALL',
                'year' => 2018,
                'date' => '2018-04-25 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:52:57',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'May Day',
                'state' => 'NT',
                'year' => 2018,
                'date' => '2018-05-07 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:53:48',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'Labour Day',
                'state' => 'QLD',
                'year' => 2018,
                'date' => '2018-05-07 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:54:33',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'Western Australia Day',
                'state' => 'WA',
                'year' => 2018,
                'date' => '2018-06-04 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:55:50',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'Queen\'s Birthday',
                'state' => 'ACT',
                'year' => 2018,
                'date' => '2018-06-11 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:58:20',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'Queen\'s Birthday',
                'state' => 'NSW',
                'year' => 2018,
                'date' => '2018-06-11 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:58:01',
            ),
            24 => 
            array (
                'id' => 26,
                'name' => 'Queen\'s Birthday',
                'state' => 'NT',
                'year' => 2018,
                'date' => '2018-06-11 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:56:23',
            ),
            25 => 
            array (
                'id' => 27,
                'name' => 'Queen\'s Birthday',
                'state' => 'SA',
                'year' => 2018,
                'date' => '2018-06-11 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:56:55',
            ),
            26 => 
            array (
                'id' => 28,
                'name' => 'Queen\'s Birthday',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-06-11 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:57:17',
            ),
            27 => 
            array (
                'id' => 29,
                'name' => 'Queen\'s Birthday',
                'state' => 'VIC',
                'year' => 2018,
                'date' => '2018-06-11 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:57:37',
            ),
            28 => 
            array (
                'id' => 30,
                'name' => 'Picnic Day',
                'state' => 'NT',
                'year' => 2018,
                'date' => '2018-08-06 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 11:02:36',
            ),
            29 => 
            array (
                'id' => 31,
                'name' => 'Queen\'s Birthday',
                'state' => 'WA',
                'year' => 2018,
                'date' => '2018-09-24 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 11:04:28',
            ),
            30 => 
            array (
                'id' => 34,
                'name' => 'Labour Day',
                'state' => 'ACT',
                'year' => 2018,
                'date' => '2018-10-01 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 11:06:58',
            ),
            31 => 
            array (
                'id' => 35,
                'name' => 'Labour Day',
                'state' => 'NSW',
                'year' => 2018,
                'date' => '2018-10-01 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 11:06:36',
            ),
            32 => 
            array (
                'id' => 36,
                'name' => 'Labour Day',
                'state' => 'SA',
                'year' => 2018,
                'date' => '2018-10-01 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 11:05:29',
            ),
            33 => 
            array (
                'id' => 37,
                'name' => 'Queen\'s Birthday',
                'state' => 'QLD',
                'year' => 2018,
                'date' => '2018-10-01 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 11:06:17',
            ),
            34 => 
            array (
                'id' => 38,
                'name' => 'Melbourne Cup Day',
                'state' => 'VIC',
                'year' => 2018,
                'date' => '2018-11-06 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 11:12:50',
            ),
            35 => 
            array (
                'id' => 39,
                'name' => 'Christmas Eve',
                'state' => 'SA',
                'year' => 2018,
                'date' => '2018-12-24 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 11:14:05',
            ),
            36 => 
            array (
                'id' => 40,
                'name' => 'Christmas Day',
                'state' => 'ALL',
                'year' => 2018,
                'date' => '2018-12-25 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 11:14:25',
            ),
            37 => 
            array (
                'id' => 42,
                'name' => 'Boxing Day',
                'state' => 'NSW',
                'year' => 2016,
                'date' => '2016-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            38 => 
            array (
                'id' => 44,
                'name' => 'Boxing Day',
                'state' => 'QLD',
                'year' => 2016,
                'date' => '2016-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            39 => 
            array (
                'id' => 45,
                'name' => 'Boxing Day',
                'state' => 'WA',
                'year' => 2016,
                'date' => '2016-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            40 => 
            array (
                'id' => 46,
                'name' => 'Boxing Day',
                'state' => 'TAS',
                'year' => 2016,
                'date' => '2016-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            41 => 
            array (
                'id' => 47,
                'name' => 'Boxing Day',
                'state' => 'VIC',
                'year' => 2016,
                'date' => '2016-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            42 => 
            array (
                'id' => 48,
                'name' => 'Christmas Day holiday',
                'state' => 'SA',
                'year' => 2016,
                'date' => '2016-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            43 => 
            array (
                'id' => 49,
                'name' => 'Christmas Day holiday',
                'state' => 'ACT',
                'year' => 2016,
                'date' => '2016-12-27 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            44 => 
            array (
                'id' => 50,
                'name' => 'Christmas Day holiday',
                'state' => 'NSW',
                'year' => 2016,
                'date' => '2016-12-27 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            45 => 
            array (
                'id' => 51,
                'name' => 'Christmas Day holiday',
                'state' => 'NT',
                'year' => 2016,
                'date' => '2016-12-27 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            46 => 
            array (
                'id' => 52,
                'name' => 'Christmas Day holiday',
                'state' => 'QLD',
                'year' => 2016,
                'date' => '2016-12-27 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            47 => 
            array (
                'id' => 53,
                'name' => 'Christmas Day holiday',
                'state' => 'WA',
                'year' => 2016,
                'date' => '2016-12-27 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            48 => 
            array (
                'id' => 54,
                'name' => 'Christmas Day holiday',
                'state' => 'TAS',
                'year' => 2016,
                'date' => '2016-12-27 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            49 => 
            array (
                'id' => 55,
                'name' => 'Christmas Day holiday',
                'state' => 'VIC',
                'year' => 2016,
                'date' => '2016-12-27 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            50 => 
            array (
                'id' => 56,
                'name' => 'Boxing Day holiday',
                'state' => 'WA',
                'year' => 2016,
                'date' => '2016-12-27 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            51 => 
            array (
                'id' => 57,
                'name' => 'Proclamation Day',
                'state' => 'SA',
                'year' => 2016,
                'date' => '2016-12-27 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            52 => 
            array (
                'id' => 58,
                'name' => 'New Year\'s Eve',
                'state' => 'SA',
                'year' => 2017,
                'date' => '2017-12-31 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:33:22',
            ),
            53 => 
            array (
                'id' => 61,
                'name' => 'Australia Day',
                'state' => 'ALL',
                'year' => 2017,
                'date' => '2017-01-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            54 => 
            array (
                'id' => 62,
                'name' => 'Labour Day',
                'state' => 'WA',
                'year' => 2017,
                'date' => '2017-03-06 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            55 => 
            array (
                'id' => 63,
                'name' => 'March public holiday',
                'state' => 'SA',
                'year' => 2017,
                'date' => '2017-03-13 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            56 => 
            array (
                'id' => 64,
                'name' => 'Canberra Day',
                'state' => 'ACT',
                'year' => 2017,
                'date' => '2017-03-13 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            57 => 
            array (
                'id' => 65,
                'name' => 'Eight Hours Day',
                'state' => 'TAS',
                'year' => 2017,
                'date' => '2017-03-13 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            58 => 
            array (
                'id' => 66,
                'name' => 'Labour Day',
                'state' => 'VIC',
                'year' => 2017,
                'date' => '2017-03-13 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            59 => 
            array (
                'id' => 67,
                'name' => 'Good Friday',
                'state' => 'ALL',
                'year' => 2017,
                'date' => '2017-04-14 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            60 => 
            array (
                'id' => 68,
                'name' => 'Easter Saturday',
                'state' => 'ACT',
                'year' => 2017,
                'date' => '2017-04-15 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            61 => 
            array (
                'id' => 69,
                'name' => 'Easter Saturday',
                'state' => 'NSW',
                'year' => 2017,
                'date' => '2017-04-15 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            62 => 
            array (
                'id' => 70,
                'name' => 'Easter Saturday',
                'state' => 'SA',
                'year' => 2017,
                'date' => '2017-04-15 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            63 => 
            array (
                'id' => 71,
                'name' => 'Easter Saturday',
                'state' => 'QLD',
                'year' => 2017,
                'date' => '2017-04-15 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            64 => 
            array (
                'id' => 72,
                'name' => 'Easter Saturday',
                'state' => 'NT',
                'year' => 2017,
                'date' => '2017-04-15 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            65 => 
            array (
                'id' => 73,
                'name' => 'Easter Saturday',
                'state' => 'VIC',
                'year' => 2017,
                'date' => '2017-04-15 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            66 => 
            array (
                'id' => 74,
                'name' => 'Easter Sunday',
                'state' => 'ACT',
                'year' => 2017,
                'date' => '2017-04-16 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            67 => 
            array (
                'id' => 75,
                'name' => 'Easter Sunday',
                'state' => 'NSW',
                'year' => 2017,
                'date' => '2017-04-16 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            68 => 
            array (
                'id' => 76,
                'name' => 'Easter Sunday',
                'state' => 'VIC',
                'year' => 2017,
                'date' => '2017-04-16 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            69 => 
            array (
                'id' => 77,
                'name' => 'Easter Monday',
                'state' => 'ALL',
                'year' => 2017,
                'date' => '2017-04-17 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            70 => 
            array (
                'id' => 78,
                'name' => 'Easter Tuesday',
                'state' => 'TAS',
                'year' => 2017,
                'date' => '2017-04-18 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            71 => 
            array (
                'id' => 79,
                'name' => 'Anzac Day',
                'state' => 'ALL',
                'year' => 2017,
                'date' => '2017-04-25 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            72 => 
            array (
                'id' => 80,
                'name' => 'May Day',
                'state' => 'NT',
                'year' => 2017,
                'date' => '2017-05-01 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            73 => 
            array (
                'id' => 81,
                'name' => 'Labour Day',
                'state' => 'QLD',
                'year' => 2017,
                'date' => '2017-05-01 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            74 => 
            array (
                'id' => 82,
                'name' => 'Western Australia Day',
                'state' => 'WA',
                'year' => 2017,
                'date' => '2017-06-05 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            75 => 
            array (
                'id' => 83,
                'name' => 'Queen\'s Birthday',
                'state' => 'ACT',
                'year' => 2017,
                'date' => '2017-06-12 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            76 => 
            array (
                'id' => 84,
                'name' => 'Queen\'s Birthday',
                'state' => 'NSW',
                'year' => 2017,
                'date' => '2017-06-12 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            77 => 
            array (
                'id' => 85,
                'name' => 'Queen\'s Birthday',
                'state' => 'NT',
                'year' => 2017,
                'date' => '2017-06-12 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            78 => 
            array (
                'id' => 86,
                'name' => 'Queen\'s Birthday',
                'state' => 'SA',
                'year' => 2017,
                'date' => '2017-06-12 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            79 => 
            array (
                'id' => 87,
                'name' => 'Queen\'s Birthday',
                'state' => 'TAS',
                'year' => 2017,
                'date' => '2017-06-12 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            80 => 
            array (
                'id' => 88,
                'name' => 'Queen\'s Birthday',
                'state' => 'VIC',
                'year' => 2017,
                'date' => '2017-06-12 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            81 => 
            array (
                'id' => 89,
                'name' => 'Picnic Day',
                'state' => 'NT',
                'year' => 2017,
                'date' => '2017-08-07 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            82 => 
            array (
                'id' => 90,
                'name' => 'Queen\'s Birthday',
                'state' => 'WA',
                'year' => 2017,
                'date' => '2017-09-25 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            83 => 
            array (
                'id' => 91,
                'name' => 'Family & Community Day',
                'state' => 'ACT',
                'year' => 2017,
                'date' => '2017-09-25 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            84 => 
            array (
                'id' => 92,
                'name' => 'Labour Day',
                'state' => 'ACT',
                'year' => 2017,
                'date' => '2017-10-02 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            85 => 
            array (
                'id' => 93,
                'name' => 'Labour Day',
                'state' => 'NSW',
                'year' => 2017,
                'date' => '2017-10-02 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            86 => 
            array (
                'id' => 94,
                'name' => 'Labour Day',
                'state' => 'SA',
                'year' => 2017,
                'date' => '2017-10-02 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            87 => 
            array (
                'id' => 95,
                'name' => 'Queen\'s Birthday',
                'state' => 'QLD',
                'year' => 2017,
                'date' => '2017-10-02 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            88 => 
            array (
                'id' => 96,
                'name' => 'Melbourne Cup Day',
                'state' => 'VIC',
                'year' => 2017,
                'date' => '2017-11-07 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            89 => 
            array (
                'id' => 97,
                'name' => 'Christmas Eve',
                'state' => 'SA',
                'year' => 2017,
                'date' => '2017-12-24 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            90 => 
            array (
                'id' => 98,
                'name' => 'Christmas Day',
                'state' => 'ALL',
                'year' => 2017,
                'date' => '2017-12-25 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            91 => 
            array (
                'id' => 99,
                'name' => 'Boxing Day',
                'state' => 'ACT',
                'year' => 2017,
                'date' => '2017-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            92 => 
            array (
                'id' => 100,
                'name' => 'Boxing Day',
                'state' => 'TAS',
                'year' => 2017,
                'date' => '2017-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            93 => 
            array (
                'id' => 101,
                'name' => 'Boxing Day',
                'state' => 'VIC',
                'year' => 2017,
                'date' => '2017-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            94 => 
            array (
                'id' => 102,
                'name' => 'Boxing Day',
                'state' => 'NSW',
                'year' => 2017,
                'date' => '2017-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            95 => 
            array (
                'id' => 103,
                'name' => 'Boxing Day',
                'state' => 'QLD',
                'year' => 2017,
                'date' => '2017-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            96 => 
            array (
                'id' => 104,
                'name' => 'Boxing Day',
                'state' => 'NT',
                'year' => 2017,
                'date' => '2017-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            97 => 
            array (
                'id' => 105,
                'name' => 'Proclamation Day',
                'state' => 'SA',
                'year' => 2017,
                'date' => '2017-12-26 10:06:33',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2016-08-16 10:06:33',
            ),
            98 => 
            array (
                'id' => 106,
                'name' => 'New Year\'s Eve',
                'state' => 'SA',
                'year' => 2018,
                'date' => '2018-12-31 23:29:59',
                'created_at' => '2016-08-16 10:06:33',
                'updated_at' => '2017-10-26 10:33:59',
            ),
            99 => 
            array (
                'id' => 107,
                'name' => 'Devonport Cup',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-01-10 23:29:59',
                'created_at' => '2017-10-26 10:37:39',
                'updated_at' => '2017-10-26 10:37:39',
            ),
            100 => 
            array (
                'id' => 108,
                'name' => 'Royal Hobart Regatta',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-02-12 23:29:59',
                'created_at' => '2017-10-26 10:40:54',
                'updated_at' => '2017-10-26 10:40:54',
            ),
            101 => 
            array (
                'id' => 109,
                'name' => 'Launceston Cup',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-02-28 23:29:59',
                'created_at' => '2017-10-26 10:41:47',
                'updated_at' => '2017-10-26 10:41:47',
            ),
            102 => 
            array (
                'id' => 110,
                'name' => 'Labour Day',
                'state' => 'WA',
                'year' => 2018,
                'date' => '2018-03-05 23:29:59',
                'created_at' => '2017-10-26 10:42:32',
                'updated_at' => '2017-10-26 10:42:32',
            ),
            103 => 
            array (
                'id' => 111,
                'name' => 'King Island Show',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-03-06 23:29:59',
                'created_at' => '2017-10-26 10:43:18',
                'updated_at' => '2017-10-26 10:43:18',
            ),
            104 => 
            array (
                'id' => 112,
                'name' => 'Easter Sunday',
                'state' => 'QLD',
                'year' => 2018,
                'date' => '2018-04-01 23:29:59',
                'created_at' => '2017-10-26 10:49:16',
                'updated_at' => '2017-10-26 10:49:16',
            ),
            105 => 
            array (
                'id' => 113,
                'name' => 'Agfest',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-05-04 23:29:59',
                'created_at' => '2017-10-26 10:53:25',
                'updated_at' => '2017-10-26 10:53:25',
            ),
            106 => 
            array (
                'id' => 114,
                'name' => 'Reconciliation Day',
                'state' => 'ACT',
                'year' => 2018,
                'date' => '2018-05-28 23:29:59',
                'created_at' => '2017-10-26 10:55:23',
                'updated_at' => '2017-10-26 10:55:23',
            ),
            107 => 
            array (
                'id' => 115,
                'name' => 'Borroloola Show Day',
                'state' => 'NT',
                'year' => 2018,
                'date' => '2018-06-29 23:29:59',
                'created_at' => '2017-10-26 10:59:26',
                'updated_at' => '2017-10-26 10:59:26',
            ),
            108 => 
            array (
                'id' => 116,
                'name' => 'Alice Springs Show Day',
                'state' => 'NT',
                'year' => 2018,
                'date' => '2018-07-06 23:29:59',
                'created_at' => '2017-10-26 11:00:04',
                'updated_at' => '2017-10-26 11:00:04',
            ),
            109 => 
            array (
                'id' => 117,
                'name' => 'Tennant Creek Show Day',
                'state' => 'NT',
                'year' => 2018,
                'date' => '2018-07-13 23:29:59',
                'created_at' => '2017-10-26 11:00:47',
                'updated_at' => '2017-10-26 11:00:47',
            ),
            110 => 
            array (
                'id' => 118,
                'name' => 'Katherine Show Day',
                'state' => 'NT',
                'year' => 2018,
                'date' => '2018-07-20 23:29:59',
                'created_at' => '2017-10-26 11:01:37',
                'updated_at' => '2017-10-26 11:01:37',
            ),
            111 => 
            array (
                'id' => 119,
                'name' => 'Darwin Show Day',
                'state' => 'NT',
                'year' => 2018,
                'date' => '2018-07-27 23:29:59',
                'created_at' => '2017-10-26 11:02:14',
                'updated_at' => '2017-10-26 11:02:14',
            ),
            112 => 
            array (
                'id' => 120,
                'name' => 'Ekka Wednesday',
                'state' => 'QLD',
                'year' => 2018,
                'date' => '2018-08-15 23:29:59',
                'created_at' => '2017-10-26 11:03:14',
                'updated_at' => '2017-10-26 11:03:14',
            ),
            113 => 
            array (
                'id' => 121,
                'name' => 'AFL Grand Final Friday',
                'state' => 'VIC',
                'year' => 2018,
                'date' => '2018-09-28 23:29:59',
                'created_at' => '2017-10-26 11:05:04',
                'updated_at' => '2017-10-26 11:05:04',
            ),
            114 => 
            array (
                'id' => 122,
                'name' => 'Burnie Show',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-10-05 23:29:59',
                'created_at' => '2017-10-26 11:07:46',
                'updated_at' => '2017-10-26 11:07:46',
            ),
            115 => 
            array (
                'id' => 123,
                'name' => 'Royal Launceston Show',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-10-11 23:29:59',
                'created_at' => '2017-10-26 11:10:34',
                'updated_at' => '2017-10-26 11:10:34',
            ),
            116 => 
            array (
                'id' => 124,
                'name' => 'Flinders Island Show',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-10-19 23:29:59',
                'created_at' => '2017-10-26 11:11:06',
                'updated_at' => '2017-10-26 11:23:45',
            ),
            117 => 
            array (
                'id' => 125,
                'name' => 'Royal Hobart Show',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-10-25 23:29:59',
                'created_at' => '2017-10-26 11:11:42',
                'updated_at' => '2017-10-26 11:11:42',
            ),
            118 => 
            array (
                'id' => 126,
                'name' => 'Recreation Day',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-11-05 23:29:59',
                'created_at' => '2017-10-26 11:12:23',
                'updated_at' => '2017-10-26 11:12:23',
            ),
            119 => 
            array (
                'id' => 127,
                'name' => 'Devonport Show',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-11-30 23:29:59',
                'created_at' => '2017-10-26 11:13:33',
                'updated_at' => '2017-10-26 11:13:33',
            ),
            120 => 
            array (
                'id' => 128,
                'name' => 'Devonport Show',
                'state' => 'TAS',
                'year' => 2018,
                'date' => '2018-11-30 23:29:59',
                'created_at' => '2017-10-26 11:13:37',
                'updated_at' => '2017-10-26 11:13:37',
            ),
            121 => 
            array (
                'id' => 129,
            'name' => 'Boxing Day (Proclamation Day in SA)',
                'state' => 'ALL',
                'year' => 2018,
                'date' => '2018-12-26 23:29:59',
                'created_at' => '2017-10-26 11:15:53',
                'updated_at' => '2017-10-26 11:15:53',
            ),
        ));
        
        
    }
}