<?php

use Illuminate\Database\Seeder;

class ActivityMediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_media')->delete();
        
        \DB::table('activity_media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'activity_id' => 6,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-04-25 11:11:27',
                'updated_at' => '2017-04-25 11:11:27',
            ),
            1 => 
            array (
                'id' => 2,
                'activity_id' => 6,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-04-25 11:11:33',
                'updated_at' => '2017-04-25 11:11:33',
            ),
            2 => 
            array (
                'id' => 3,
                'activity_id' => 7,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-04-26 13:08:10',
                'updated_at' => '2017-04-26 13:08:10',
            ),
            3 => 
            array (
                'id' => 4,
                'activity_id' => 7,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-04-26 13:08:16',
                'updated_at' => '2017-04-26 13:08:16',
            ),
            4 => 
            array (
                'id' => 5,
                'activity_id' => 8,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-04-28 09:15:35',
                'updated_at' => '2017-04-28 09:15:35',
            ),
            5 => 
            array (
                'id' => 6,
                'activity_id' => 10,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-05-01 10:38:12',
                'updated_at' => '2017-05-01 10:38:12',
            ),
            6 => 
            array (
                'id' => 7,
                'activity_id' => 10,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-05-01 10:38:19',
                'updated_at' => '2017-05-01 10:38:19',
            ),
            7 => 
            array (
                'id' => 8,
                'activity_id' => 11,
                'original_name' => 'end of 2014 start 2015 002.jpg',
                'type' => 'BROCHURE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-05-01 10:49:45',
                'updated_at' => '2017-05-01 10:49:45',
            ),
            8 => 
            array (
                'id' => 9,
                'activity_id' => 12,
            'original_name' => 'Fathers Day (1).pdf',
                'type' => 'BROCHURE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-05-04 12:46:06',
                'updated_at' => '2017-05-04 12:46:06',
            ),
            9 => 
            array (
                'id' => 10,
                'activity_id' => 16,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-05-06 11:53:13',
                'updated_at' => '2017-05-06 11:53:13',
            ),
            10 => 
            array (
                'id' => 12,
                'activity_id' => 23,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-14 10:09:18',
                'updated_at' => '2017-08-14 10:09:18',
            ),
            11 => 
            array (
                'id' => 13,
                'activity_id' => 26,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-17 14:34:04',
                'updated_at' => '2017-08-17 14:34:04',
            ),
            12 => 
            array (
                'id' => 14,
                'activity_id' => 27,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-22 10:52:05',
                'updated_at' => '2017-08-22 10:52:05',
            ),
            13 => 
            array (
                'id' => 15,
                'activity_id' => 27,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-22 18:41:04',
                'updated_at' => '2017-08-22 18:41:04',
            ),
            14 => 
            array (
                'id' => 16,
                'activity_id' => 27,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-22 18:41:12',
                'updated_at' => '2017-08-22 18:41:12',
            ),
            15 => 
            array (
                'id' => 17,
                'activity_id' => 27,
                'original_name' => 'trifold_brochure_templates_6814827.jpg',
                'type' => 'BROCHURE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-22 18:43:04',
                'updated_at' => '2017-08-22 18:43:04',
            ),
            16 => 
            array (
                'id' => 18,
                'activity_id' => 28,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-22 18:58:10',
                'updated_at' => '2017-08-22 18:58:10',
            ),
            17 => 
            array (
                'id' => 20,
                'activity_id' => 29,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-24 09:07:45',
                'updated_at' => '2017-08-24 09:07:45',
            ),
            18 => 
            array (
                'id' => 21,
                'activity_id' => 30,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-24 13:38:58',
                'updated_at' => '2017-08-24 13:38:58',
            ),
            19 => 
            array (
                'id' => 22,
                'activity_id' => 30,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-24 13:39:08',
                'updated_at' => '2017-08-24 13:39:08',
            ),
            20 => 
            array (
                'id' => 23,
                'activity_id' => 30,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-24 13:39:16',
                'updated_at' => '2017-08-24 13:39:16',
            ),
            21 => 
            array (
                'id' => 24,
                'activity_id' => 34,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-04 11:44:26',
                'updated_at' => '2017-09-04 11:44:26',
            ),
            22 => 
            array (
                'id' => 25,
                'activity_id' => 34,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-04 11:44:39',
                'updated_at' => '2017-09-04 11:44:39',
            ),
            23 => 
            array (
                'id' => 27,
                'activity_id' => 35,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-04 13:20:14',
                'updated_at' => '2017-09-04 13:20:14',
            ),
            24 => 
            array (
                'id' => 28,
                'activity_id' => 35,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-04 13:20:18',
                'updated_at' => '2017-09-04 13:20:18',
            ),
            25 => 
            array (
                'id' => 29,
                'activity_id' => 37,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-04 15:54:58',
                'updated_at' => '2017-09-04 15:54:58',
            ),
            26 => 
            array (
                'id' => 30,
                'activity_id' => 37,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-04 15:55:07',
                'updated_at' => '2017-09-04 15:55:07',
            ),
            27 => 
            array (
                'id' => 32,
                'activity_id' => 37,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-04 15:56:29',
                'updated_at' => '2017-09-04 15:56:29',
            ),
            28 => 
            array (
                'id' => 34,
                'activity_id' => 39,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-06 10:36:37',
                'updated_at' => '2017-09-06 10:36:37',
            ),
            29 => 
            array (
                'id' => 35,
                'activity_id' => 40,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-07 13:14:27',
                'updated_at' => '2017-09-07 13:14:27',
            ),
            30 => 
            array (
                'id' => 36,
                'activity_id' => 41,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 11:12:27',
                'updated_at' => '2017-09-11 11:12:27',
            ),
            31 => 
            array (
                'id' => 37,
                'activity_id' => 43,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 14:16:16',
                'updated_at' => '2017-09-11 14:16:16',
            ),
            32 => 
            array (
                'id' => 38,
                'activity_id' => 44,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-12 11:38:34',
                'updated_at' => '2017-09-12 11:38:34',
            ),
            33 => 
            array (
                'id' => 39,
                'activity_id' => 45,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-12 12:58:44',
                'updated_at' => '2017-09-12 12:58:44',
            ),
            34 => 
            array (
                'id' => 40,
                'activity_id' => 46,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-12 13:22:53',
                'updated_at' => '2017-09-12 13:22:53',
            ),
            35 => 
            array (
                'id' => 41,
                'activity_id' => 47,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-13 10:39:36',
                'updated_at' => '2017-09-13 10:39:36',
            ),
            36 => 
            array (
                'id' => 42,
                'activity_id' => 47,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-13 10:40:01',
                'updated_at' => '2017-09-13 10:40:01',
            ),
            37 => 
            array (
                'id' => 43,
                'activity_id' => 47,
                'original_name' => 'web05_Brochure_pg01.jpg',
                'type' => 'BROCHURE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-13 10:40:27',
                'updated_at' => '2017-09-13 10:40:27',
            ),
            38 => 
            array (
                'id' => 44,
                'activity_id' => 49,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-14 09:29:18',
                'updated_at' => '2017-09-20 15:22:58',
            ),
            39 => 
            array (
                'id' => 45,
                'activity_id' => 50,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-14 09:57:57',
                'updated_at' => '2017-09-14 09:57:57',
            ),
            40 => 
            array (
                'id' => 46,
                'activity_id' => 50,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-14 09:58:09',
                'updated_at' => '2017-09-14 09:58:09',
            ),
            41 => 
            array (
                'id' => 47,
                'activity_id' => 50,
                'original_name' => 'Sydney Draculaura.jpg',
                'type' => 'BROCHURE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-14 09:58:21',
                'updated_at' => '2017-09-14 09:58:21',
            ),
            42 => 
            array (
                'id' => 49,
                'activity_id' => 48,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-14 12:20:53',
                'updated_at' => '2017-09-14 12:20:53',
            ),
            43 => 
            array (
                'id' => 51,
                'activity_id' => 52,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-15 10:57:08',
                'updated_at' => '2017-09-15 10:57:08',
            ),
            44 => 
            array (
                'id' => 52,
                'activity_id' => 53,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-15 12:23:58',
                'updated_at' => '2017-09-15 12:23:58',
            ),
            45 => 
            array (
                'id' => 53,
                'activity_id' => 54,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-19 10:07:13',
                'updated_at' => '2017-09-19 10:07:13',
            ),
            46 => 
            array (
                'id' => 54,
                'activity_id' => 55,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-19 13:32:50',
                'updated_at' => '2017-09-19 13:32:50',
            ),
            47 => 
            array (
                'id' => 55,
                'activity_id' => 56,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-20 10:09:58',
                'updated_at' => '2017-09-20 10:09:58',
            ),
            48 => 
            array (
                'id' => 56,
                'activity_id' => 57,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-20 10:21:38',
                'updated_at' => '2017-09-20 10:21:38',
            ),
            49 => 
            array (
                'id' => 57,
                'activity_id' => 49,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 1,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-20 15:22:42',
                'updated_at' => '2017-09-20 15:22:58',
            ),
            50 => 
            array (
                'id' => 58,
                'activity_id' => 58,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-21 09:01:09',
                'updated_at' => '2017-09-21 09:01:09',
            ),
            51 => 
            array (
                'id' => 59,
                'activity_id' => 60,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-21 11:13:10',
                'updated_at' => '2017-09-21 11:13:10',
            ),
            52 => 
            array (
                'id' => 60,
                'activity_id' => 60,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 1,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-21 11:13:11',
                'updated_at' => '2017-09-21 11:13:11',
            ),
            53 => 
            array (
                'id' => 61,
                'activity_id' => 61,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-21 11:38:23',
                'updated_at' => '2017-09-21 11:38:23',
            ),
            54 => 
            array (
                'id' => 62,
                'activity_id' => 61,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-21 11:38:25',
                'updated_at' => '2017-09-21 11:38:25',
            ),
            55 => 
            array (
                'id' => 63,
                'activity_id' => 61,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-21 11:38:34',
                'updated_at' => '2017-09-21 11:38:34',
            ),
            56 => 
            array (
                'id' => 65,
                'activity_id' => 62,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-24 09:36:07',
                'updated_at' => '2017-09-24 09:36:07',
            ),
            57 => 
            array (
                'id' => 66,
                'activity_id' => 63,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-24 09:51:11',
                'updated_at' => '2017-09-24 09:51:11',
            ),
            58 => 
            array (
                'id' => 67,
                'activity_id' => 51,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-25 15:42:36',
                'updated_at' => '2017-09-25 15:42:36',
            ),
            59 => 
            array (
                'id' => 68,
                'activity_id' => 64,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-27 07:48:11',
                'updated_at' => '2017-09-27 07:48:11',
            ),
            60 => 
            array (
                'id' => 69,
                'activity_id' => 65,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-27 08:21:29',
                'updated_at' => '2017-09-27 08:21:29',
            ),
            61 => 
            array (
                'id' => 70,
                'activity_id' => 67,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-27 11:19:20',
                'updated_at' => '2017-09-27 11:19:20',
            ),
            62 => 
            array (
                'id' => 71,
                'activity_id' => 72,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'TO_DELETE',
                'created_at' => '2017-09-29 06:54:52',
                'updated_at' => '2017-09-29 07:12:33',
            ),
            63 => 
            array (
                'id' => 72,
                'activity_id' => 72,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'TO_DELETE',
                'created_at' => '2017-09-29 06:55:28',
                'updated_at' => '2017-09-29 07:12:33',
            ),
            64 => 
            array (
                'id' => 73,
                'activity_id' => 71,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-29 07:19:38',
                'updated_at' => '2017-09-29 07:19:38',
            ),
            65 => 
            array (
                'id' => 74,
                'activity_id' => 71,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-29 07:20:45',
                'updated_at' => '2017-09-29 07:20:45',
            ),
            66 => 
            array (
                'id' => 76,
                'activity_id' => 71,
                'original_name' => 'WoiApplication.pdf',
                'type' => 'BROCHURE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-09-29 07:21:01',
                'updated_at' => '2017-09-29 07:21:01',
            ),
            67 => 
            array (
                'id' => 77,
                'activity_id' => 74,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-10-01 12:20:29',
                'updated_at' => '2017-10-01 12:20:29',
            ),
            68 => 
            array (
                'id' => 78,
                'activity_id' => 74,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-10-01 12:20:47',
                'updated_at' => '2017-10-01 12:20:47',
            ),
            69 => 
            array (
                'id' => 79,
                'activity_id' => 74,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-10-01 12:21:53',
                'updated_at' => '2017-10-01 12:21:53',
            ),
            70 => 
            array (
                'id' => 80,
                'activity_id' => 77,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-10-09 12:41:13',
                'updated_at' => '2017-10-09 12:41:13',
            ),
            71 => 
            array (
                'id' => 81,
                'activity_id' => 80,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-10-11 09:16:06',
                'updated_at' => '2017-10-11 09:16:06',
            ),
            72 => 
            array (
                'id' => 82,
                'activity_id' => 84,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-10-19 13:08:48',
                'updated_at' => '2017-10-19 13:08:48',
            ),
            73 => 
            array (
                'id' => 83,
                'activity_id' => 84,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-10-19 13:10:24',
                'updated_at' => '2017-10-19 13:10:24',
            ),
            74 => 
            array (
                'id' => 84,
                'activity_id' => 86,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-10-24 11:03:16',
                'updated_at' => '2017-10-24 11:03:16',
            ),
            75 => 
            array (
                'id' => 86,
                'activity_id' => 86,
                'original_name' => '',
                'type' => 'PEOPLE',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-10-24 11:04:05',
                'updated_at' => '2017-10-24 11:04:05',
            ),
            76 => 
            array (
                'id' => 87,
                'activity_id' => 90,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-10-25 12:02:24',
                'updated_at' => '2017-10-25 12:02:24',
            ),
            77 => 
            array (
                'id' => 88,
                'activity_id' => 91,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-10-26 10:06:18',
                'updated_at' => '2017-10-26 10:06:18',
            ),
            78 => 
            array (
                'id' => 89,
                'activity_id' => 95,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-11-03 12:36:56',
                'updated_at' => '2017-11-03 12:36:56',
            ),
            79 => 
            array (
                'id' => 90,
                'activity_id' => 96,
                'original_name' => '',
                'type' => 'BANNER',
                'sort_order' => 0,
                'status' => 'ACTIVE',
                'created_at' => '2017-11-03 12:54:37',
                'updated_at' => '2017-11-03 12:54:37',
            ),
        ));
        
        
    }
}