<?php

use Illuminate\Database\Seeder;

class ActivityKeywordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_keywords')->delete();
        
        \DB::table('activity_keywords')->insert(array (
            0 => 
            array (
                'id' => 1,
                'activity_id' => 1,
                'keyword' => 'Fun',
                'created_at' => '2017-04-24 15:51:35',
                'updated_at' => '2017-04-24 15:51:35',
            ),
            1 => 
            array (
                'id' => 2,
                'activity_id' => 2,
                'keyword' => 'test',
                'created_at' => '2017-04-24 17:29:15',
                'updated_at' => '2017-04-24 17:29:15',
            ),
            2 => 
            array (
                'id' => 3,
                'activity_id' => 3,
                'keyword' => '12312',
                'created_at' => '2017-04-24 18:05:59',
                'updated_at' => '2017-04-24 18:05:59',
            ),
            3 => 
            array (
                'id' => 4,
                'activity_id' => 4,
                'keyword' => 'test',
                'created_at' => '2017-04-24 19:45:45',
                'updated_at' => '2017-04-24 19:45:45',
            ),
            4 => 
            array (
                'id' => 5,
                'activity_id' => 6,
                'keyword' => 'computer',
                'created_at' => '2017-04-25 11:11:07',
                'updated_at' => '2017-04-25 11:11:07',
            ),
            5 => 
            array (
                'id' => 6,
                'activity_id' => 6,
                'keyword' => 'technology',
                'created_at' => '2017-04-25 11:11:07',
                'updated_at' => '2017-04-25 11:11:07',
            ),
            6 => 
            array (
                'id' => 7,
                'activity_id' => 6,
                'keyword' => 'kids',
                'created_at' => '2017-04-25 11:11:07',
                'updated_at' => '2017-04-25 11:11:07',
            ),
            7 => 
            array (
                'id' => 8,
                'activity_id' => 7,
                'keyword' => 'fun',
                'created_at' => '2017-04-26 13:06:52',
                'updated_at' => '2017-04-26 13:06:52',
            ),
            8 => 
            array (
                'id' => 9,
                'activity_id' => 8,
                'keyword' => 'tennis',
                'created_at' => '2017-04-28 09:11:52',
                'updated_at' => '2017-04-28 09:11:52',
            ),
            9 => 
            array (
                'id' => 10,
                'activity_id' => 8,
                'keyword' => 'lessons',
                'created_at' => '2017-04-28 09:11:52',
                'updated_at' => '2017-04-28 09:11:52',
            ),
            10 => 
            array (
                'id' => 36,
                'activity_id' => 11,
                'keyword' => 'reading',
                'created_at' => '2017-05-04 12:28:41',
                'updated_at' => '2017-05-04 12:28:41',
            ),
            11 => 
            array (
                'id' => 37,
                'activity_id' => 11,
                'keyword' => 'writing',
                'created_at' => '2017-05-04 12:28:41',
                'updated_at' => '2017-05-04 12:28:41',
            ),
            12 => 
            array (
                'id' => 38,
                'activity_id' => 11,
                'keyword' => 'phonics',
                'created_at' => '2017-05-04 12:28:41',
                'updated_at' => '2017-05-04 12:28:41',
            ),
            13 => 
            array (
                'id' => 39,
                'activity_id' => 11,
                'keyword' => 'maths',
                'created_at' => '2017-05-04 12:28:41',
                'updated_at' => '2017-05-04 12:28:41',
            ),
            14 => 
            array (
                'id' => 40,
                'activity_id' => 11,
                'keyword' => 'counting',
                'created_at' => '2017-05-04 12:28:41',
                'updated_at' => '2017-05-04 12:28:41',
            ),
            15 => 
            array (
                'id' => 41,
                'activity_id' => 11,
                'keyword' => 'adding',
                'created_at' => '2017-05-04 12:28:41',
                'updated_at' => '2017-05-04 12:28:41',
            ),
            16 => 
            array (
                'id' => 42,
                'activity_id' => 11,
                'keyword' => 'subtracting',
                'created_at' => '2017-05-04 12:28:41',
                'updated_at' => '2017-05-04 12:28:41',
            ),
            17 => 
            array (
                'id' => 43,
                'activity_id' => 11,
                'keyword' => 'prep',
                'created_at' => '2017-05-04 12:28:41',
                'updated_at' => '2017-05-04 12:28:41',
            ),
            18 => 
            array (
                'id' => 49,
                'activity_id' => 15,
                'keyword' => 'fun',
                'created_at' => '2017-05-04 13:05:54',
                'updated_at' => '2017-05-04 13:05:54',
            ),
            19 => 
            array (
                'id' => 50,
                'activity_id' => 12,
                'keyword' => 'art',
                'created_at' => '2017-05-05 11:50:07',
                'updated_at' => '2017-05-05 11:50:07',
            ),
            20 => 
            array (
                'id' => 51,
                'activity_id' => 12,
                'keyword' => 'craft',
                'created_at' => '2017-05-05 11:50:07',
                'updated_at' => '2017-05-05 11:50:07',
            ),
            21 => 
            array (
                'id' => 52,
                'activity_id' => 12,
                'keyword' => 'paint',
                'created_at' => '2017-05-05 11:50:07',
                'updated_at' => '2017-05-05 11:50:07',
            ),
            22 => 
            array (
                'id' => 53,
                'activity_id' => 12,
                'keyword' => 'clay',
                'created_at' => '2017-05-05 11:50:07',
                'updated_at' => '2017-05-05 11:50:07',
            ),
            23 => 
            array (
                'id' => 54,
                'activity_id' => 12,
                'keyword' => 'paper',
                'created_at' => '2017-05-05 11:50:07',
                'updated_at' => '2017-05-05 11:50:07',
            ),
            24 => 
            array (
                'id' => 55,
                'activity_id' => 16,
                'keyword' => 'fun',
                'created_at' => '2017-05-06 11:52:00',
                'updated_at' => '2017-05-06 11:52:00',
            ),
            25 => 
            array (
                'id' => 56,
                'activity_id' => 16,
                'keyword' => 'pottery',
                'created_at' => '2017-05-06 11:52:00',
                'updated_at' => '2017-05-06 11:52:00',
            ),
            26 => 
            array (
                'id' => 57,
                'activity_id' => 16,
                'keyword' => 'craft',
                'created_at' => '2017-05-06 11:52:00',
                'updated_at' => '2017-05-06 11:52:00',
            ),
            27 => 
            array (
                'id' => 58,
                'activity_id' => 17,
                'keyword' => 'sport',
                'created_at' => '2017-05-06 12:53:08',
                'updated_at' => '2017-05-06 12:53:08',
            ),
            28 => 
            array (
                'id' => 59,
                'activity_id' => 17,
                'keyword' => 'gym',
                'created_at' => '2017-05-06 12:53:08',
                'updated_at' => '2017-05-06 12:53:08',
            ),
            29 => 
            array (
                'id' => 63,
                'activity_id' => 10,
                'keyword' => 'Fun',
                'created_at' => '2017-05-09 09:51:45',
                'updated_at' => '2017-05-09 09:51:45',
            ),
            30 => 
            array (
                'id' => 64,
                'activity_id' => 18,
                'keyword' => 'test',
                'created_at' => '2017-05-11 08:44:48',
                'updated_at' => '2017-05-11 08:44:48',
            ),
            31 => 
            array (
                'id' => 65,
                'activity_id' => 19,
                'keyword' => 'fun',
                'created_at' => '2017-05-11 12:49:58',
                'updated_at' => '2017-05-11 12:49:58',
            ),
            32 => 
            array (
                'id' => 66,
                'activity_id' => 20,
                'keyword' => 'badge',
                'created_at' => '2017-07-25 10:26:32',
                'updated_at' => '2017-07-25 10:26:32',
            ),
            33 => 
            array (
                'id' => 67,
                'activity_id' => 20,
                'keyword' => 'making',
                'created_at' => '2017-07-25 10:26:32',
                'updated_at' => '2017-07-25 10:26:32',
            ),
            34 => 
            array (
                'id' => 68,
                'activity_id' => 20,
                'keyword' => 'magnets',
                'created_at' => '2017-07-25 10:26:32',
                'updated_at' => '2017-07-25 10:26:32',
            ),
            35 => 
            array (
                'id' => 75,
                'activity_id' => 24,
                'keyword' => 'party',
                'created_at' => '2017-08-08 10:02:36',
                'updated_at' => '2017-08-08 10:02:36',
            ),
            36 => 
            array (
                'id' => 77,
                'activity_id' => 23,
                'keyword' => 'piano',
                'created_at' => '2017-08-08 14:06:25',
                'updated_at' => '2017-08-08 14:06:25',
            ),
            37 => 
            array (
                'id' => 78,
                'activity_id' => 23,
                'keyword' => 'music',
                'created_at' => '2017-08-08 14:06:25',
                'updated_at' => '2017-08-08 14:06:25',
            ),
            38 => 
            array (
                'id' => 79,
                'activity_id' => 23,
                'keyword' => 'theory',
                'created_at' => '2017-08-08 14:06:25',
                'updated_at' => '2017-08-08 14:06:25',
            ),
            39 => 
            array (
                'id' => 80,
                'activity_id' => 21,
                'keyword' => 'party',
                'created_at' => '2017-08-11 08:53:36',
                'updated_at' => '2017-08-11 08:53:36',
            ),
            40 => 
            array (
                'id' => 81,
                'activity_id' => 26,
                'keyword' => 'keyboard',
                'created_at' => '2017-08-17 14:33:21',
                'updated_at' => '2017-08-17 14:33:21',
            ),
            41 => 
            array (
                'id' => 82,
                'activity_id' => 26,
                'keyword' => 'piano',
                'created_at' => '2017-08-17 14:33:21',
                'updated_at' => '2017-08-17 14:33:21',
            ),
            42 => 
            array (
                'id' => 89,
                'activity_id' => 27,
                'keyword' => 'music',
                'created_at' => '2017-08-22 10:51:15',
                'updated_at' => '2017-08-22 10:51:15',
            ),
            43 => 
            array (
                'id' => 90,
                'activity_id' => 27,
                'keyword' => 'percussion',
                'created_at' => '2017-08-22 10:51:15',
                'updated_at' => '2017-08-22 10:51:15',
            ),
            44 => 
            array (
                'id' => 91,
                'activity_id' => 28,
                'keyword' => 'tennis',
                'created_at' => '2017-08-22 18:57:19',
                'updated_at' => '2017-08-22 18:57:19',
            ),
            45 => 
            array (
                'id' => 92,
                'activity_id' => 29,
                'keyword' => 'cooking',
                'created_at' => '2017-08-24 09:06:30',
                'updated_at' => '2017-08-24 09:06:30',
            ),
            46 => 
            array (
                'id' => 93,
                'activity_id' => 29,
                'keyword' => 'baking',
                'created_at' => '2017-08-24 09:06:30',
                'updated_at' => '2017-08-24 09:06:30',
            ),
            47 => 
            array (
                'id' => 94,
                'activity_id' => 29,
                'keyword' => 'cakes',
                'created_at' => '2017-08-24 09:06:30',
                'updated_at' => '2017-08-24 09:06:30',
            ),
            48 => 
            array (
                'id' => 95,
                'activity_id' => 29,
                'keyword' => 'kitchen',
                'created_at' => '2017-08-24 09:06:30',
                'updated_at' => '2017-08-24 09:06:30',
            ),
            49 => 
            array (
                'id' => 96,
                'activity_id' => 30,
                'keyword' => 'fun',
                'created_at' => '2017-08-24 13:38:14',
                'updated_at' => '2017-08-24 13:38:14',
            ),
            50 => 
            array (
                'id' => 97,
                'activity_id' => 30,
                'keyword' => 'activity',
                'created_at' => '2017-08-24 13:38:14',
                'updated_at' => '2017-08-24 13:38:14',
            ),
            51 => 
            array (
                'id' => 98,
                'activity_id' => 30,
                'keyword' => 'kids',
                'created_at' => '2017-08-24 13:38:14',
                'updated_at' => '2017-08-24 13:38:14',
            ),
            52 => 
            array (
                'id' => 100,
                'activity_id' => 31,
                'keyword' => 'fun',
                'created_at' => '2017-08-31 15:09:56',
                'updated_at' => '2017-08-31 15:09:56',
            ),
            53 => 
            array (
                'id' => 101,
                'activity_id' => 32,
                'keyword' => 'fun',
                'created_at' => '2017-09-01 09:38:00',
                'updated_at' => '2017-09-01 09:38:00',
            ),
            54 => 
            array (
                'id' => 102,
                'activity_id' => 34,
                'keyword' => 'Footy',
                'created_at' => '2017-09-04 11:28:45',
                'updated_at' => '2017-09-04 11:28:45',
            ),
            55 => 
            array (
                'id' => 103,
                'activity_id' => 35,
                'keyword' => 'Photography',
                'created_at' => '2017-09-04 13:16:45',
                'updated_at' => '2017-09-04 13:16:45',
            ),
            56 => 
            array (
                'id' => 104,
                'activity_id' => 35,
                'keyword' => 'Photoes',
                'created_at' => '2017-09-04 13:16:45',
                'updated_at' => '2017-09-04 13:16:45',
            ),
            57 => 
            array (
                'id' => 105,
                'activity_id' => 35,
                'keyword' => 'photo',
                'created_at' => '2017-09-04 13:16:45',
                'updated_at' => '2017-09-04 13:16:45',
            ),
            58 => 
            array (
                'id' => 106,
                'activity_id' => 35,
                'keyword' => 'workshop',
                'created_at' => '2017-09-04 13:16:45',
                'updated_at' => '2017-09-04 13:16:45',
            ),
            59 => 
            array (
                'id' => 107,
                'activity_id' => 36,
                'keyword' => 'Party',
                'created_at' => '2017-09-04 14:36:19',
                'updated_at' => '2017-09-04 14:36:19',
            ),
            60 => 
            array (
                'id' => 108,
                'activity_id' => 36,
                'keyword' => 'Spring',
                'created_at' => '2017-09-04 14:36:19',
                'updated_at' => '2017-09-04 14:36:19',
            ),
            61 => 
            array (
                'id' => 109,
                'activity_id' => 36,
                'keyword' => 'outdoor',
                'created_at' => '2017-09-04 14:36:19',
                'updated_at' => '2017-09-04 14:36:19',
            ),
            62 => 
            array (
                'id' => 115,
                'activity_id' => 37,
                'keyword' => 'food',
                'created_at' => '2017-09-04 16:01:36',
                'updated_at' => '2017-09-04 16:01:36',
            ),
            63 => 
            array (
                'id' => 116,
                'activity_id' => 37,
                'keyword' => 'cake',
                'created_at' => '2017-09-04 16:01:36',
                'updated_at' => '2017-09-04 16:01:36',
            ),
            64 => 
            array (
                'id' => 117,
                'activity_id' => 37,
                'keyword' => 'catering',
                'created_at' => '2017-09-04 16:01:36',
                'updated_at' => '2017-09-04 16:01:36',
            ),
            65 => 
            array (
                'id' => 118,
                'activity_id' => 37,
                'keyword' => 'party',
                'created_at' => '2017-09-04 16:01:36',
                'updated_at' => '2017-09-04 16:01:36',
            ),
            66 => 
            array (
                'id' => 119,
                'activity_id' => 37,
                'keyword' => 'lunches',
                'created_at' => '2017-09-04 16:01:36',
                'updated_at' => '2017-09-04 16:01:36',
            ),
            67 => 
            array (
                'id' => 124,
                'activity_id' => 38,
                'keyword' => 'cupcake',
                'created_at' => '2017-09-05 09:18:39',
                'updated_at' => '2017-09-05 09:18:39',
            ),
            68 => 
            array (
                'id' => 125,
                'activity_id' => 38,
                'keyword' => 'Cake',
                'created_at' => '2017-09-05 09:18:39',
                'updated_at' => '2017-09-05 09:18:39',
            ),
            69 => 
            array (
                'id' => 126,
                'activity_id' => 39,
                'keyword' => 'cooking',
                'created_at' => '2017-09-06 10:35:53',
                'updated_at' => '2017-09-06 10:35:53',
            ),
            70 => 
            array (
                'id' => 127,
                'activity_id' => 39,
                'keyword' => 'parties',
                'created_at' => '2017-09-06 10:35:53',
                'updated_at' => '2017-09-06 10:35:53',
            ),
            71 => 
            array (
                'id' => 128,
                'activity_id' => 40,
                'keyword' => 'cooking',
                'created_at' => '2017-09-07 13:13:38',
                'updated_at' => '2017-09-07 13:13:38',
            ),
            72 => 
            array (
                'id' => 129,
                'activity_id' => 40,
                'keyword' => 'holiday',
                'created_at' => '2017-09-07 13:13:38',
                'updated_at' => '2017-09-07 13:13:38',
            ),
            73 => 
            array (
                'id' => 130,
                'activity_id' => 41,
                'keyword' => 'cooking',
                'created_at' => '2017-09-11 11:11:08',
                'updated_at' => '2017-09-11 11:11:08',
            ),
            74 => 
            array (
                'id' => 131,
                'activity_id' => 41,
                'keyword' => 'masterchef',
                'created_at' => '2017-09-11 11:11:08',
                'updated_at' => '2017-09-11 11:11:08',
            ),
            75 => 
            array (
                'id' => 132,
                'activity_id' => 42,
                'keyword' => 'party',
                'created_at' => '2017-09-11 12:41:24',
                'updated_at' => '2017-09-11 12:41:24',
            ),
            76 => 
            array (
                'id' => 134,
                'activity_id' => 43,
                'keyword' => 'Pet',
                'created_at' => '2017-09-11 14:15:50',
                'updated_at' => '2017-09-11 14:15:50',
            ),
            77 => 
            array (
                'id' => 135,
                'activity_id' => 44,
                'keyword' => 'piano',
                'created_at' => '2017-09-12 11:37:42',
                'updated_at' => '2017-09-12 11:37:42',
            ),
            78 => 
            array (
                'id' => 136,
                'activity_id' => 44,
                'keyword' => 'lessons',
                'created_at' => '2017-09-12 11:37:42',
                'updated_at' => '2017-09-12 11:37:42',
            ),
            79 => 
            array (
                'id' => 137,
                'activity_id' => 44,
                'keyword' => 'keyboard',
                'created_at' => '2017-09-12 11:37:42',
                'updated_at' => '2017-09-12 11:37:42',
            ),
            80 => 
            array (
                'id' => 138,
                'activity_id' => 44,
                'keyword' => 'music',
                'created_at' => '2017-09-12 11:37:42',
                'updated_at' => '2017-09-12 11:37:42',
            ),
            81 => 
            array (
                'id' => 139,
                'activity_id' => 44,
                'keyword' => 'theory',
                'created_at' => '2017-09-12 11:37:42',
                'updated_at' => '2017-09-12 11:37:42',
            ),
            82 => 
            array (
                'id' => 140,
                'activity_id' => 45,
                'keyword' => 'harp',
                'created_at' => '2017-09-12 12:57:55',
                'updated_at' => '2017-09-12 12:57:55',
            ),
            83 => 
            array (
                'id' => 141,
                'activity_id' => 45,
                'keyword' => 'lessons',
                'created_at' => '2017-09-12 12:57:55',
                'updated_at' => '2017-09-12 12:57:55',
            ),
            84 => 
            array (
                'id' => 142,
                'activity_id' => 45,
                'keyword' => 'music',
                'created_at' => '2017-09-12 12:57:55',
                'updated_at' => '2017-09-12 12:57:55',
            ),
            85 => 
            array (
                'id' => 143,
                'activity_id' => 46,
                'keyword' => 'piano',
                'created_at' => '2017-09-12 13:22:03',
                'updated_at' => '2017-09-12 13:22:03',
            ),
            86 => 
            array (
                'id' => 144,
                'activity_id' => 46,
                'keyword' => 'party',
                'created_at' => '2017-09-12 13:22:03',
                'updated_at' => '2017-09-12 13:22:03',
            ),
            87 => 
            array (
                'id' => 145,
                'activity_id' => 47,
                'keyword' => 'piano',
                'created_at' => '2017-09-13 10:36:51',
                'updated_at' => '2017-09-13 10:36:51',
            ),
            88 => 
            array (
                'id' => 146,
                'activity_id' => 47,
                'keyword' => 'lesson',
                'created_at' => '2017-09-13 10:36:51',
                'updated_at' => '2017-09-13 10:36:51',
            ),
            89 => 
            array (
                'id' => 147,
                'activity_id' => 48,
                'keyword' => 'keyboard',
                'created_at' => '2017-09-13 13:24:22',
                'updated_at' => '2017-09-13 13:24:22',
            ),
            90 => 
            array (
                'id' => 148,
                'activity_id' => 48,
                'keyword' => 'piano',
                'created_at' => '2017-09-13 13:24:22',
                'updated_at' => '2017-09-13 13:24:22',
            ),
            91 => 
            array (
                'id' => 149,
                'activity_id' => 48,
                'keyword' => 'music',
                'created_at' => '2017-09-13 13:24:22',
                'updated_at' => '2017-09-13 13:24:22',
            ),
            92 => 
            array (
                'id' => 150,
                'activity_id' => 49,
                'keyword' => 'cake',
                'created_at' => '2017-09-14 09:28:03',
                'updated_at' => '2017-09-14 09:28:03',
            ),
            93 => 
            array (
                'id' => 151,
                'activity_id' => 49,
                'keyword' => 'cupcake',
                'created_at' => '2017-09-14 09:28:03',
                'updated_at' => '2017-09-14 09:28:03',
            ),
            94 => 
            array (
                'id' => 152,
                'activity_id' => 50,
                'keyword' => 'tennis',
                'created_at' => '2017-09-14 09:52:59',
                'updated_at' => '2017-09-14 09:52:59',
            ),
            95 => 
            array (
                'id' => 153,
                'activity_id' => 51,
                'keyword' => 'dancing',
                'created_at' => '2017-09-14 10:37:10',
                'updated_at' => '2017-09-14 10:37:10',
            ),
            96 => 
            array (
                'id' => 154,
                'activity_id' => 52,
                'keyword' => 'piano',
                'created_at' => '2017-09-15 10:55:59',
                'updated_at' => '2017-09-15 10:55:59',
            ),
            97 => 
            array (
                'id' => 155,
                'activity_id' => 52,
                'keyword' => 'concert',
                'created_at' => '2017-09-15 10:55:59',
                'updated_at' => '2017-09-15 10:55:59',
            ),
            98 => 
            array (
                'id' => 156,
                'activity_id' => 53,
                'keyword' => 'cooking',
                'created_at' => '2017-09-15 12:23:18',
                'updated_at' => '2017-09-15 12:23:18',
            ),
            99 => 
            array (
                'id' => 157,
                'activity_id' => 53,
                'keyword' => 'baking',
                'created_at' => '2017-09-15 12:23:18',
                'updated_at' => '2017-09-15 12:23:18',
            ),
            100 => 
            array (
                'id' => 158,
                'activity_id' => 53,
                'keyword' => 'food',
                'created_at' => '2017-09-15 12:23:18',
                'updated_at' => '2017-09-15 12:23:18',
            ),
            101 => 
            array (
                'id' => 159,
                'activity_id' => 53,
                'keyword' => 'kitchen',
                'created_at' => '2017-09-15 12:23:18',
                'updated_at' => '2017-09-15 12:23:18',
            ),
            102 => 
            array (
                'id' => 160,
                'activity_id' => 54,
                'keyword' => 'food',
                'created_at' => '2017-09-19 10:04:24',
                'updated_at' => '2017-09-19 10:04:24',
            ),
            103 => 
            array (
                'id' => 161,
                'activity_id' => 54,
                'keyword' => 'fun',
                'created_at' => '2017-09-19 10:04:24',
                'updated_at' => '2017-09-19 10:04:24',
            ),
            104 => 
            array (
                'id' => 162,
                'activity_id' => 54,
                'keyword' => 'parties',
                'created_at' => '2017-09-19 10:04:24',
                'updated_at' => '2017-09-19 10:04:24',
            ),
            105 => 
            array (
                'id' => 163,
                'activity_id' => 55,
                'keyword' => 'ballet',
                'created_at' => '2017-09-19 13:32:16',
                'updated_at' => '2017-09-19 13:32:16',
            ),
            106 => 
            array (
                'id' => 164,
                'activity_id' => 55,
                'keyword' => 'dance',
                'created_at' => '2017-09-19 13:32:16',
                'updated_at' => '2017-09-19 13:32:16',
            ),
            107 => 
            array (
                'id' => 165,
                'activity_id' => 55,
                'keyword' => 'tap',
                'created_at' => '2017-09-19 13:32:16',
                'updated_at' => '2017-09-19 13:32:16',
            ),
            108 => 
            array (
                'id' => 166,
                'activity_id' => 55,
                'keyword' => 'jazz',
                'created_at' => '2017-09-19 13:32:16',
                'updated_at' => '2017-09-19 13:32:16',
            ),
            109 => 
            array (
                'id' => 167,
                'activity_id' => 56,
                'keyword' => 'berry',
                'created_at' => '2017-09-20 10:09:05',
                'updated_at' => '2017-09-20 10:09:05',
            ),
            110 => 
            array (
                'id' => 168,
                'activity_id' => 56,
                'keyword' => 'picking',
                'created_at' => '2017-09-20 10:09:05',
                'updated_at' => '2017-09-20 10:09:05',
            ),
            111 => 
            array (
                'id' => 169,
                'activity_id' => 56,
                'keyword' => 'fruit',
                'created_at' => '2017-09-20 10:09:05',
                'updated_at' => '2017-09-20 10:09:05',
            ),
            112 => 
            array (
                'id' => 170,
                'activity_id' => 56,
                'keyword' => 'farm',
                'created_at' => '2017-09-20 10:09:05',
                'updated_at' => '2017-09-20 10:09:05',
            ),
            113 => 
            array (
                'id' => 171,
                'activity_id' => 57,
                'keyword' => 'farm',
                'created_at' => '2017-09-20 10:20:53',
                'updated_at' => '2017-09-20 10:20:53',
            ),
            114 => 
            array (
                'id' => 172,
                'activity_id' => 58,
                'keyword' => 'music',
                'created_at' => '2017-09-21 09:00:20',
                'updated_at' => '2017-09-21 09:00:20',
            ),
            115 => 
            array (
                'id' => 173,
                'activity_id' => 58,
                'keyword' => 'concert',
                'created_at' => '2017-09-21 09:00:20',
                'updated_at' => '2017-09-21 09:00:20',
            ),
            116 => 
            array (
                'id' => 174,
                'activity_id' => 58,
                'keyword' => 'holiday',
                'created_at' => '2017-09-21 09:00:20',
                'updated_at' => '2017-09-21 09:00:20',
            ),
            117 => 
            array (
                'id' => 175,
                'activity_id' => 58,
                'keyword' => 'program',
                'created_at' => '2017-09-21 09:00:20',
                'updated_at' => '2017-09-21 09:00:20',
            ),
            118 => 
            array (
                'id' => 176,
                'activity_id' => 60,
                'keyword' => 'cake',
                'created_at' => '2017-09-21 11:13:09',
                'updated_at' => '2017-09-21 11:13:09',
            ),
            119 => 
            array (
                'id' => 177,
                'activity_id' => 60,
                'keyword' => 'cupcake',
                'created_at' => '2017-09-21 11:13:09',
                'updated_at' => '2017-09-21 11:13:09',
            ),
            120 => 
            array (
                'id' => 182,
                'activity_id' => 62,
                'keyword' => 'party',
                'created_at' => '2017-09-24 09:34:52',
                'updated_at' => '2017-09-24 09:34:52',
            ),
            121 => 
            array (
                'id' => 183,
                'activity_id' => 62,
                'keyword' => 'food',
                'created_at' => '2017-09-24 09:34:52',
                'updated_at' => '2017-09-24 09:34:52',
            ),
            122 => 
            array (
                'id' => 184,
                'activity_id' => 63,
                'keyword' => 'party',
                'created_at' => '2017-09-24 09:50:17',
                'updated_at' => '2017-09-24 09:50:17',
            ),
            123 => 
            array (
                'id' => 185,
                'activity_id' => 63,
                'keyword' => 'food',
                'created_at' => '2017-09-24 09:50:17',
                'updated_at' => '2017-09-24 09:50:17',
            ),
            124 => 
            array (
                'id' => 186,
                'activity_id' => 63,
                'keyword' => 'catering',
                'created_at' => '2017-09-24 09:50:17',
                'updated_at' => '2017-09-24 09:50:17',
            ),
            125 => 
            array (
                'id' => 189,
                'activity_id' => 64,
                'keyword' => 'music',
                'created_at' => '2017-09-27 07:47:17',
                'updated_at' => '2017-09-27 07:47:17',
            ),
            126 => 
            array (
                'id' => 190,
                'activity_id' => 64,
                'keyword' => 'teacher',
                'created_at' => '2017-09-27 07:47:17',
                'updated_at' => '2017-09-27 07:47:17',
            ),
            127 => 
            array (
                'id' => 191,
                'activity_id' => 65,
                'keyword' => 'dance',
                'created_at' => '2017-09-27 08:20:04',
                'updated_at' => '2017-09-27 08:20:04',
            ),
            128 => 
            array (
                'id' => 192,
                'activity_id' => 65,
                'keyword' => 'fun',
                'created_at' => '2017-09-27 08:20:04',
                'updated_at' => '2017-09-27 08:20:04',
            ),
            129 => 
            array (
                'id' => 193,
                'activity_id' => 66,
                'keyword' => 'Dance',
                'created_at' => '2017-09-27 10:33:15',
                'updated_at' => '2017-09-27 10:33:15',
            ),
            130 => 
            array (
                'id' => 194,
                'activity_id' => 66,
                'keyword' => 'Cheerleading',
                'created_at' => '2017-09-27 10:33:15',
                'updated_at' => '2017-09-27 10:33:15',
            ),
            131 => 
            array (
                'id' => 195,
                'activity_id' => 66,
                'keyword' => 'Cheer',
                'created_at' => '2017-09-27 10:33:15',
                'updated_at' => '2017-09-27 10:33:15',
            ),
            132 => 
            array (
                'id' => 196,
                'activity_id' => 66,
                'keyword' => 'Acro',
                'created_at' => '2017-09-27 10:33:15',
                'updated_at' => '2017-09-27 10:33:15',
            ),
            133 => 
            array (
                'id' => 197,
                'activity_id' => 66,
                'keyword' => 'Flips',
                'created_at' => '2017-09-27 10:33:15',
                'updated_at' => '2017-09-27 10:33:15',
            ),
            134 => 
            array (
                'id' => 198,
                'activity_id' => 67,
                'keyword' => 'dance',
                'created_at' => '2017-09-27 11:18:34',
                'updated_at' => '2017-09-27 11:18:34',
            ),
            135 => 
            array (
                'id' => 199,
                'activity_id' => 67,
                'keyword' => 'tap',
                'created_at' => '2017-09-27 11:18:34',
                'updated_at' => '2017-09-27 11:18:34',
            ),
            136 => 
            array (
                'id' => 200,
                'activity_id' => 67,
                'keyword' => 'stage',
                'created_at' => '2017-09-27 11:18:34',
                'updated_at' => '2017-09-27 11:18:34',
            ),
            137 => 
            array (
                'id' => 201,
                'activity_id' => 67,
                'keyword' => 'perfom',
                'created_at' => '2017-09-27 11:18:34',
                'updated_at' => '2017-09-27 11:18:34',
            ),
            138 => 
            array (
                'id' => 202,
                'activity_id' => 68,
                'keyword' => 'test',
                'created_at' => '2017-09-27 14:03:08',
                'updated_at' => '2017-09-27 14:03:08',
            ),
            139 => 
            array (
                'id' => 203,
                'activity_id' => 61,
                'keyword' => 'cricket',
                'created_at' => '2017-09-27 14:31:38',
                'updated_at' => '2017-09-27 14:31:38',
            ),
            140 => 
            array (
                'id' => 204,
                'activity_id' => 61,
                'keyword' => 'holiday',
                'created_at' => '2017-09-27 14:31:38',
                'updated_at' => '2017-09-27 14:31:38',
            ),
            141 => 
            array (
                'id' => 205,
                'activity_id' => 69,
                'keyword' => 'soccer',
                'created_at' => '2017-09-27 14:54:03',
                'updated_at' => '2017-09-27 14:54:03',
            ),
            142 => 
            array (
                'id' => 206,
                'activity_id' => 70,
                'keyword' => 'fun',
                'created_at' => '2017-09-27 15:32:14',
                'updated_at' => '2017-09-27 15:32:14',
            ),
            143 => 
            array (
                'id' => 210,
                'activity_id' => 71,
                'keyword' => 'apples',
                'created_at' => '2017-09-29 07:17:32',
                'updated_at' => '2017-09-29 07:17:32',
            ),
            144 => 
            array (
                'id' => 211,
                'activity_id' => 71,
                'keyword' => 'kids',
                'created_at' => '2017-09-29 07:17:32',
                'updated_at' => '2017-09-29 07:17:32',
            ),
            145 => 
            array (
                'id' => 212,
                'activity_id' => 71,
                'keyword' => 'fun',
                'created_at' => '2017-09-29 07:17:32',
                'updated_at' => '2017-09-29 07:17:32',
            ),
            146 => 
            array (
                'id' => 213,
                'activity_id' => 71,
                'keyword' => 'holiday',
                'created_at' => '2017-09-29 07:17:32',
                'updated_at' => '2017-09-29 07:17:32',
            ),
            147 => 
            array (
                'id' => 214,
                'activity_id' => 71,
                'keyword' => 'programme',
                'created_at' => '2017-09-29 07:17:32',
                'updated_at' => '2017-09-29 07:17:32',
            ),
            148 => 
            array (
                'id' => 215,
                'activity_id' => 73,
                'keyword' => 'asdasd',
                'created_at' => '2017-09-30 12:43:47',
                'updated_at' => '2017-09-30 12:43:47',
            ),
            149 => 
            array (
                'id' => 216,
                'activity_id' => 74,
                'keyword' => 'classes',
                'created_at' => '2017-10-01 12:18:34',
                'updated_at' => '2017-10-01 12:18:34',
            ),
            150 => 
            array (
                'id' => 217,
                'activity_id' => 74,
                'keyword' => 'apples',
                'created_at' => '2017-10-01 12:18:34',
                'updated_at' => '2017-10-01 12:18:34',
            ),
            151 => 
            array (
                'id' => 218,
                'activity_id' => 75,
                'keyword' => 'netball',
                'created_at' => '2017-10-02 11:31:22',
                'updated_at' => '2017-10-02 11:31:22',
            ),
            152 => 
            array (
                'id' => 219,
                'activity_id' => 76,
                'keyword' => 'test',
                'created_at' => '2017-10-03 09:44:55',
                'updated_at' => '2017-10-03 09:44:55',
            ),
            153 => 
            array (
                'id' => 220,
                'activity_id' => 77,
                'keyword' => 'music',
                'created_at' => '2017-10-09 12:40:26',
                'updated_at' => '2017-10-09 12:40:26',
            ),
            154 => 
            array (
                'id' => 221,
                'activity_id' => 78,
                'keyword' => 'test',
                'created_at' => '2017-10-10 14:04:23',
                'updated_at' => '2017-10-10 14:04:23',
            ),
            155 => 
            array (
                'id' => 222,
                'activity_id' => 79,
                'keyword' => 'This',
                'created_at' => '2017-10-10 14:18:05',
                'updated_at' => '2017-10-10 14:18:05',
            ),
            156 => 
            array (
                'id' => 223,
                'activity_id' => 80,
                'keyword' => 'music',
                'created_at' => '2017-10-11 09:01:28',
                'updated_at' => '2017-10-11 09:01:28',
            ),
            157 => 
            array (
                'id' => 224,
                'activity_id' => 80,
                'keyword' => 'theory',
                'created_at' => '2017-10-11 09:01:28',
                'updated_at' => '2017-10-11 09:01:28',
            ),
            158 => 
            array (
                'id' => 226,
                'activity_id' => 82,
                'keyword' => 'fun',
                'created_at' => '2017-10-16 08:00:03',
                'updated_at' => '2017-10-16 08:00:03',
            ),
            159 => 
            array (
                'id' => 227,
                'activity_id' => 83,
                'keyword' => 'test',
                'created_at' => '2017-10-17 15:32:38',
                'updated_at' => '2017-10-17 15:32:38',
            ),
            160 => 
            array (
                'id' => 228,
                'activity_id' => 84,
                'keyword' => 'fun',
                'created_at' => '2017-10-19 13:07:54',
                'updated_at' => '2017-10-19 13:07:54',
            ),
            161 => 
            array (
                'id' => 229,
                'activity_id' => 84,
                'keyword' => 'nature',
                'created_at' => '2017-10-19 13:07:54',
                'updated_at' => '2017-10-19 13:07:54',
            ),
            162 => 
            array (
                'id' => 230,
                'activity_id' => 85,
                'keyword' => 'dsas',
                'created_at' => '2017-10-23 11:10:53',
                'updated_at' => '2017-10-23 11:10:53',
            ),
            163 => 
            array (
                'id' => 231,
                'activity_id' => 86,
                'keyword' => 'piano',
                'created_at' => '2017-10-24 11:02:15',
                'updated_at' => '2017-10-24 11:02:15',
            ),
            164 => 
            array (
                'id' => 232,
                'activity_id' => 86,
                'keyword' => 'lessons',
                'created_at' => '2017-10-24 11:02:15',
                'updated_at' => '2017-10-24 11:02:15',
            ),
            165 => 
            array (
                'id' => 233,
                'activity_id' => 86,
                'keyword' => 'music',
                'created_at' => '2017-10-24 11:02:15',
                'updated_at' => '2017-10-24 11:02:15',
            ),
            166 => 
            array (
                'id' => 234,
                'activity_id' => 86,
                'keyword' => 'theory',
                'created_at' => '2017-10-24 11:02:15',
                'updated_at' => '2017-10-24 11:02:15',
            ),
            167 => 
            array (
                'id' => 235,
                'activity_id' => 86,
                'keyword' => 'keyboard',
                'created_at' => '2017-10-24 11:02:15',
                'updated_at' => '2017-10-24 11:02:15',
            ),
            168 => 
            array (
                'id' => 236,
                'activity_id' => 87,
                'keyword' => 'fun',
                'created_at' => '2017-10-24 12:40:05',
                'updated_at' => '2017-10-24 12:40:05',
            ),
            169 => 
            array (
                'id' => 237,
                'activity_id' => 88,
                'keyword' => 'cricket',
                'created_at' => '2017-10-25 09:09:43',
                'updated_at' => '2017-10-25 09:09:43',
            ),
            170 => 
            array (
                'id' => 238,
                'activity_id' => 89,
                'keyword' => 'test',
                'created_at' => '2017-10-25 09:32:48',
                'updated_at' => '2017-10-25 09:32:48',
            ),
            171 => 
            array (
                'id' => 240,
                'activity_id' => 90,
                'keyword' => 'fun',
                'created_at' => '2017-10-25 12:03:11',
                'updated_at' => '2017-10-25 12:03:11',
            ),
            172 => 
            array (
                'id' => 241,
                'activity_id' => 91,
                'keyword' => 'piano',
                'created_at' => '2017-10-26 10:05:13',
                'updated_at' => '2017-10-26 10:05:13',
            ),
            173 => 
            array (
                'id' => 242,
                'activity_id' => 92,
                'keyword' => 'piano',
                'created_at' => '2017-10-26 13:33:48',
                'updated_at' => '2017-10-26 13:33:48',
            ),
            174 => 
            array (
                'id' => 243,
                'activity_id' => 93,
                'keyword' => 'est',
                'created_at' => '2017-10-30 14:16:38',
                'updated_at' => '2017-10-30 14:16:38',
            ),
            175 => 
            array (
                'id' => 244,
                'activity_id' => 94,
                'keyword' => 'test',
                'created_at' => '2017-11-02 14:56:03',
                'updated_at' => '2017-11-02 14:56:03',
            ),
            176 => 
            array (
                'id' => 245,
                'activity_id' => 95,
                'keyword' => 'clay',
                'created_at' => '2017-11-03 12:36:08',
                'updated_at' => '2017-11-03 12:36:08',
            ),
            177 => 
            array (
                'id' => 246,
                'activity_id' => 95,
                'keyword' => 'ceramic',
                'created_at' => '2017-11-03 12:36:08',
                'updated_at' => '2017-11-03 12:36:08',
            ),
            178 => 
            array (
                'id' => 249,
                'activity_id' => 96,
                'keyword' => 'fun',
                'created_at' => '2017-11-03 13:58:19',
                'updated_at' => '2017-11-03 13:58:19',
            ),
            179 => 
            array (
                'id' => 250,
                'activity_id' => 96,
                'keyword' => 'craft',
                'created_at' => '2017-11-03 13:58:19',
                'updated_at' => '2017-11-03 13:58:19',
            ),
        ));
        
        
    }
}