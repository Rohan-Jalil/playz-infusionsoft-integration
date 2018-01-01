<?php

use Illuminate\Database\Seeder;

class ProviderKeyDatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provider_key_dates')->delete();
        
        \DB::table('provider_key_dates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'name' => 'Term One',
                'start_date' => '2017-04-24 23:30:00',
                'end_date' => '2017-04-27 23:30:00',
                'is_deleted' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'name' => 'Winter Holidays',
                'start_date' => '2017-05-11 23:30:00',
                'end_date' => '2017-07-27 23:30:00',
                'is_deleted' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'name' => 'Autumn Holidays',
                'start_date' => '2017-04-19 18:15:06',
                'end_date' => '2017-05-12 18:15:06',
                'is_deleted' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'name' => 'Spring Holidays',
                'start_date' => '2017-06-16 18:49:03',
                'end_date' => '2017-08-24 18:49:03',
                'is_deleted' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'name' => 'Dancing Holiday',
                'start_date' => '2017-09-21 19:01:24',
                'end_date' => '2017-12-29 19:01:24',
                'is_deleted' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'name' => 'Whole Year',
                'start_date' => '2017-05-18 23:30:00',
                'end_date' => '2017-10-26 23:30:00',
                'is_deleted' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 5,
                'name' => 'Term One',
                'start_date' => '2017-06-14 23:30:00',
                'end_date' => '2017-08-24 23:30:00',
                'is_deleted' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 6,
                'name' => 'Term 2 2017',
                'start_date' => '2017-04-17 23:30:00',
                'end_date' => '2017-06-29 23:30:00',
                'is_deleted' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 8,
                'name' => 'Term Two',
                'start_date' => '2017-05-07 23:30:00',
                'end_date' => '2017-06-29 23:30:00',
                'is_deleted' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 7,
                'name' => 'term 1',
                'start_date' => '2017-04-30 23:30:00',
                'end_date' => '2018-04-30 23:30:00',
                'is_deleted' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 6,
                'name' => 'Term 3 2017',
                'start_date' => '2017-07-17 10:01:34',
                'end_date' => '2017-09-22 10:01:34',
                'is_deleted' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 6,
                'name' => 'Term 4 2017',
                'start_date' => '2017-10-09 10:35:40',
                'end_date' => '2017-12-22 10:35:40',
                'is_deleted' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 8,
                'name' => 'term 3',
                'start_date' => '2017-07-11 11:53:13',
                'end_date' => '2017-09-15 11:53:13',
                'is_deleted' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 21,
                'name' => 'Term 2',
                'start_date' => '2017-06-30 23:30:00',
                'end_date' => '2017-09-28 23:30:00',
                'is_deleted' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 26,
                'name' => 'Term 3',
                'start_date' => '2017-07-01 23:30:00',
                'end_date' => '2017-09-14 23:30:00',
                'is_deleted' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 27,
                'name' => 'Term 3',
                'start_date' => '2017-07-31 23:30:00',
                'end_date' => '2017-09-29 23:30:00',
                'is_deleted' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 28,
                'name' => 'Term 3',
                'start_date' => '2017-07-30 23:30:00',
                'end_date' => '2017-09-28 23:30:00',
                'is_deleted' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 26,
                'name' => 'Term 4',
                'start_date' => '2017-10-02 19:31:42',
                'end_date' => '2017-12-15 19:31:42',
                'is_deleted' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 29,
                'name' => 'Term 3',
                'start_date' => '2017-07-30 23:30:00',
                'end_date' => '2017-09-28 23:30:00',
                'is_deleted' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 21,
                'name' => 'Term 4',
                'start_date' => '2017-10-01 23:30:00',
                'end_date' => '2017-12-14 23:30:00',
                'is_deleted' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 29,
                'name' => 'Term 4',
                'start_date' => '2017-10-09 09:40:04',
                'end_date' => '2017-12-15 09:40:04',
                'is_deleted' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 30,
                'name' => 'Term 1',
                'start_date' => '2017-09-04 23:30:00',
                'end_date' => '2017-09-29 23:30:00',
                'is_deleted' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 30,
                'name' => 'Term 12',
                'start_date' => '2017-09-30 23:30:00',
                'end_date' => '2017-10-30 23:30:00',
                'is_deleted' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 29,
                'name' => '2017',
                'start_date' => '2016-12-31 23:30:00',
                'end_date' => '2017-12-30 23:30:00',
                'is_deleted' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 29,
                'name' => 'September holidays 2017',
                'start_date' => '2017-09-24 23:30:00',
                'end_date' => '2017-10-05 23:30:00',
                'is_deleted' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 30,
                'name' => 'Weekend clases',
                'start_date' => '2017-09-15 23:30:00',
                'end_date' => '2017-10-30 23:30:00',
                'is_deleted' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 33,
                'name' => 'Term 4',
                'start_date' => '2017-10-08 23:30:00',
                'end_date' => '2017-12-14 23:30:00',
                'is_deleted' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 37,
                'name' => '1st Week',
                'start_date' => '2017-09-30 23:30:00',
                'end_date' => '2017-10-07 23:30:00',
                'is_deleted' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 38,
                'name' => 'Term 3 Holidays',
                'start_date' => '2017-09-22 23:30:00',
                'end_date' => '2017-09-30 23:30:00',
                'is_deleted' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 33,
                'name' => '2017',
                'start_date' => '2016-12-31 23:30:00',
                'end_date' => '2017-12-30 23:30:00',
                'is_deleted' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 40,
                'name' => 'Term 4',
                'start_date' => '2017-10-08 23:30:00',
                'end_date' => '2017-12-14 23:30:00',
                'is_deleted' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 40,
                'name' => 'Term 1 2018',
                'start_date' => '2018-02-05 09:36:11',
                'end_date' => '2018-04-27 09:36:11',
                'is_deleted' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 40,
                'name' => '2017',
                'start_date' => '2016-12-31 23:30:00',
                'end_date' => '2017-12-30 23:30:00',
                'is_deleted' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 41,
                'name' => 'Term 4 2018',
                'start_date' => '2017-10-08 23:30:00',
                'end_date' => '2017-12-14 23:30:00',
                'is_deleted' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 42,
                'name' => '2017',
                'start_date' => '2016-12-31 23:30:00',
                'end_date' => '2017-12-30 23:30:00',
                'is_deleted' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 33,
                'name' => 'EOY Holidays 2017',
                'start_date' => '2017-12-17 23:30:00',
                'end_date' => '2018-02-01 23:30:00',
                'is_deleted' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 45,
                'name' => 'Term 3 holidays Week 1',
                'start_date' => '2017-09-25 11:33:03',
                'end_date' => '2017-10-01 11:33:03',
                'is_deleted' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 45,
                'name' => 'Term 3 Holidays Week 1',
                'start_date' => '2017-09-25 15:24:46',
                'end_date' => '2017-10-01 15:24:46',
                'is_deleted' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 45,
                'name' => 'Term 3 School Holidays Week 2',
                'start_date' => '2017-10-01 23:30:00',
                'end_date' => '2017-10-07 23:30:00',
                'is_deleted' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 45,
                'name' => 'Term 3',
                'start_date' => '2017-10-01 23:30:00',
                'end_date' => '2017-12-21 23:30:00',
                'is_deleted' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 33,
                'name' => 'Week 1 EOY holidays',
                'start_date' => '2017-12-17 23:30:00',
                'end_date' => '2017-12-21 23:30:00',
                'is_deleted' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 33,
                'name' => 'EOY holidays Jan 8-12',
                'start_date' => '2018-01-08 08:15:49',
                'end_date' => '2018-01-12 08:15:49',
                'is_deleted' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 49,
                'name' => 'Saturday Training',
                'start_date' => '2017-09-29 23:30:00',
                'end_date' => '2017-11-03 23:30:00',
                'is_deleted' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 49,
                'name' => 'Saturday Training',
                'start_date' => '2017-09-29 23:30:00',
                'end_date' => '2017-09-30 23:30:00',
                'is_deleted' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 45,
                'name' => 'Christmas  Holidays',
                'start_date' => '2018-01-07 23:30:00',
                'end_date' => '2018-01-25 23:30:00',
                'is_deleted' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 41,
                'name' => 'Term 1 2018',
                'start_date' => '2018-02-05 13:52:33',
                'end_date' => '2018-04-27 13:52:33',
                'is_deleted' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 51,
                'name' => 'Summer Holiday Programme',
                'start_date' => '2017-12-28 23:30:00',
                'end_date' => '2018-01-30 23:30:00',
                'is_deleted' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 45,
                'name' => 'Term 4 2018',
                'start_date' => '2018-10-08 23:30:00',
                'end_date' => '2018-12-20 23:30:00',
                'is_deleted' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 45,
                'name' => 'Term 1 - 2018',
                'start_date' => '2018-01-28 23:30:00',
                'end_date' => '2018-03-29 23:30:00',
                'is_deleted' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 45,
                'name' => 'Term 3 - 2018',
                'start_date' => '2018-07-01 23:30:00',
                'end_date' => '2018-09-27 23:30:00',
                'is_deleted' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 54,
                'name' => 'Term',
                'start_date' => '2017-10-25 23:30:00',
                'end_date' => '2017-10-30 23:30:00',
                'is_deleted' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 58,
                'name' => 'dates',
                'start_date' => '2017-09-30 23:30:00',
                'end_date' => '2017-10-30 23:30:00',
                'is_deleted' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 33,
                'name' => 'Term 1 2018',
                'start_date' => '2018-02-05 11:07:53',
                'end_date' => '2018-04-30 11:07:53',
                'is_deleted' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 33,
                'name' => 'Summer Holidays 2018',
                'start_date' => '2018-01-08 11:05:01',
                'end_date' => '2018-01-26 11:05:01',
                'is_deleted' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 59,
                'name' => 'Summer Holidays Jan 2018',
                'start_date' => '2018-01-07 23:30:00',
                'end_date' => '2018-02-01 23:30:00',
                'is_deleted' => 0,
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 59,
                'name' => 'April holidays 2018',
                'start_date' => '2018-04-02 14:21:16',
                'end_date' => '2018-04-16 14:21:16',
                'is_deleted' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 59,
                'name' => 'September holidays 2018',
                'start_date' => '2018-09-10 07:57:45',
                'end_date' => '2018-10-20 07:57:45',
                'is_deleted' => 0,
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 60,
                'name' => 'Term 4 2017',
                'start_date' => '2017-10-08 23:30:00',
                'end_date' => '2017-12-14 23:30:00',
                'is_deleted' => 0,
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => 61,
                'name' => 'Term 1 2018',
                'start_date' => '2018-01-28 23:30:00',
                'end_date' => '2018-03-29 23:30:00',
                'is_deleted' => 0,
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => 64,
                'name' => 'Summer Holidays Jan 2018',
                'start_date' => '2018-01-07 23:30:00',
                'end_date' => '2018-02-01 23:30:00',
                'is_deleted' => 0,
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => 65,
                'name' => 'Term 1 2018',
                'start_date' => '2018-01-28 23:30:00',
                'end_date' => '2018-03-29 23:30:00',
                'is_deleted' => 0,
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => 65,
                'name' => 'Term 2 2018',
                'start_date' => '2018-04-16 13:04:45',
                'end_date' => '2018-06-29 13:04:45',
                'is_deleted' => 0,
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => 65,
                'name' => 'EOY Concert',
                'start_date' => '2017-12-13 23:30:00',
                'end_date' => '2017-12-14 23:30:00',
                'is_deleted' => 0,
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => 65,
                'name' => 'Term 3 2018',
                'start_date' => '2018-07-16 09:24:06',
                'end_date' => '2018-09-21 09:24:06',
                'is_deleted' => 0,
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => 65,
                'name' => 'Term 4 2018',
                'start_date' => '2018-10-08 13:29:20',
                'end_date' => '2018-12-21 13:29:20',
                'is_deleted' => 0,
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => 65,
                'name' => 'Christmas Test Concert',
                'start_date' => '2018-12-19 23:30:00',
                'end_date' => '2018-12-30 23:30:00',
                'is_deleted' => 0,
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => 71,
                'name' => 'Term 1 2018',
                'start_date' => '2018-01-28 23:30:00',
                'end_date' => '2018-03-29 23:30:00',
                'is_deleted' => 0,
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => 75,
                'name' => '2018',
                'start_date' => '2017-12-31 23:30:00',
                'end_date' => '2018-12-30 23:30:00',
                'is_deleted' => 0,
            ),
        ));
        
        
    }
}