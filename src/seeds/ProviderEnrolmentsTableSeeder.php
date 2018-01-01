<?php

use Illuminate\Database\Seeder;

class ProviderEnrolmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provider_enrolments')->delete();
        
        \DB::table('provider_enrolments')->insert(array (
            0 => 
            array (
                'id' => 44,
                'process_enrolment_id' => 8,
                'participant_enroll_process_id' => 7,
                'event_type' => 'SESSION',
                'session_id' => 16,
                'package_id' => NULL,
                'created_at' => '2017-04-24 19:53:12',
                'updated_at' => '2017-04-24 19:53:12',
            ),
            1 => 
            array (
                'id' => 45,
                'process_enrolment_id' => 8,
                'participant_enroll_process_id' => 8,
                'event_type' => 'SESSION',
                'session_id' => 16,
                'package_id' => NULL,
                'created_at' => '2017-04-24 19:53:12',
                'updated_at' => '2017-04-24 19:53:12',
            ),
            2 => 
            array (
                'id' => 50,
                'process_enrolment_id' => 10,
                'participant_enroll_process_id' => 10,
                'event_type' => 'SESSION',
                'session_id' => 57,
                'package_id' => NULL,
                'created_at' => '2017-04-24 20:13:42',
                'updated_at' => '2017-04-24 20:13:42',
            ),
            3 => 
            array (
                'id' => 56,
                'process_enrolment_id' => 16,
                'participant_enroll_process_id' => 17,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 3,
                'created_at' => '2017-04-25 11:36:33',
                'updated_at' => '2017-04-25 11:36:33',
            ),
            4 => 
            array (
                'id' => 57,
                'process_enrolment_id' => 18,
                'participant_enroll_process_id' => 20,
                'event_type' => 'SESSION',
                'session_id' => 79,
                'package_id' => NULL,
                'created_at' => '2017-04-25 11:49:26',
                'updated_at' => '2017-04-25 11:49:26',
            ),
            5 => 
            array (
                'id' => 58,
                'process_enrolment_id' => 18,
                'participant_enroll_process_id' => 20,
                'event_type' => 'SESSION',
                'session_id' => 80,
                'package_id' => NULL,
                'created_at' => '2017-04-25 11:49:26',
                'updated_at' => '2017-04-25 11:49:26',
            ),
            6 => 
            array (
                'id' => 59,
                'process_enrolment_id' => 20,
                'participant_enroll_process_id' => 23,
                'event_type' => 'SESSION',
                'session_id' => 79,
                'package_id' => NULL,
                'created_at' => '2017-04-25 11:52:34',
                'updated_at' => '2017-04-25 11:52:34',
            ),
            7 => 
            array (
                'id' => 60,
                'process_enrolment_id' => 20,
                'participant_enroll_process_id' => 23,
                'event_type' => 'SESSION',
                'session_id' => 80,
                'package_id' => NULL,
                'created_at' => '2017-04-25 11:52:34',
                'updated_at' => '2017-04-25 11:52:34',
            ),
            8 => 
            array (
                'id' => 61,
                'process_enrolment_id' => 20,
                'participant_enroll_process_id' => 23,
                'event_type' => 'SESSION',
                'session_id' => 81,
                'package_id' => NULL,
                'created_at' => '2017-04-25 11:52:34',
                'updated_at' => '2017-04-25 11:52:34',
            ),
            9 => 
            array (
                'id' => 62,
                'process_enrolment_id' => 22,
                'participant_enroll_process_id' => 25,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 4,
                'created_at' => '2017-04-25 21:54:00',
                'updated_at' => '2017-04-25 21:54:00',
            ),
            10 => 
            array (
                'id' => 63,
                'process_enrolment_id' => 26,
                'participant_enroll_process_id' => 29,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 10,
                'created_at' => '2017-04-28 12:43:20',
                'updated_at' => '2017-04-28 12:43:20',
            ),
            11 => 
            array (
                'id' => 64,
                'process_enrolment_id' => 26,
                'participant_enroll_process_id' => 30,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 10,
                'created_at' => '2017-04-28 12:43:20',
                'updated_at' => '2017-04-28 12:43:20',
            ),
            12 => 
            array (
                'id' => 65,
                'process_enrolment_id' => 26,
                'participant_enroll_process_id' => 31,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 10,
                'created_at' => '2017-04-28 12:43:20',
                'updated_at' => '2017-04-28 12:43:20',
            ),
            13 => 
            array (
                'id' => 127,
                'process_enrolment_id' => 56,
                'participant_enroll_process_id' => 122,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 35,
                'created_at' => '2017-05-04 13:21:13',
                'updated_at' => '2017-05-04 13:21:13',
            ),
            14 => 
            array (
                'id' => 128,
                'process_enrolment_id' => 56,
                'participant_enroll_process_id' => 123,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 35,
                'created_at' => '2017-05-04 13:21:13',
                'updated_at' => '2017-05-04 13:21:13',
            ),
            15 => 
            array (
                'id' => 129,
                'process_enrolment_id' => 56,
                'participant_enroll_process_id' => 124,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 35,
                'created_at' => '2017-05-04 13:21:13',
                'updated_at' => '2017-05-04 13:21:13',
            ),
            16 => 
            array (
                'id' => 130,
                'process_enrolment_id' => 56,
                'participant_enroll_process_id' => 125,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 35,
                'created_at' => '2017-05-04 13:21:13',
                'updated_at' => '2017-05-04 13:21:13',
            ),
            17 => 
            array (
                'id' => 140,
                'process_enrolment_id' => 58,
                'participant_enroll_process_id' => 135,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 43,
                'created_at' => '2017-05-04 13:26:20',
                'updated_at' => '2017-05-04 13:26:20',
            ),
            18 => 
            array (
                'id' => 156,
                'process_enrolment_id' => 61,
                'participant_enroll_process_id' => 154,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 34,
                'created_at' => '2017-05-05 13:09:46',
                'updated_at' => '2017-05-05 13:09:46',
            ),
            19 => 
            array (
                'id' => 157,
                'process_enrolment_id' => 61,
                'participant_enroll_process_id' => 154,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 41,
                'created_at' => '2017-05-05 13:09:46',
                'updated_at' => '2017-05-05 13:09:46',
            ),
            20 => 
            array (
                'id' => 158,
                'process_enrolment_id' => 61,
                'participant_enroll_process_id' => 155,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 34,
                'created_at' => '2017-05-05 13:09:46',
                'updated_at' => '2017-05-05 13:09:46',
            ),
            21 => 
            array (
                'id' => 159,
                'process_enrolment_id' => 61,
                'participant_enroll_process_id' => 155,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 41,
                'created_at' => '2017-05-05 13:09:46',
                'updated_at' => '2017-05-05 13:09:46',
            ),
            22 => 
            array (
                'id' => 213,
                'process_enrolment_id' => 108,
                'participant_enroll_process_id' => 227,
                'event_type' => 'SESSION',
                'session_id' => 745,
                'package_id' => NULL,
                'created_at' => '2017-07-21 11:20:11',
                'updated_at' => '2017-07-21 11:20:11',
            ),
            23 => 
            array (
                'id' => 214,
                'process_enrolment_id' => 108,
                'participant_enroll_process_id' => 228,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 56,
                'created_at' => '2017-07-21 11:20:11',
                'updated_at' => '2017-07-21 11:20:11',
            ),
            24 => 
            array (
                'id' => 220,
                'process_enrolment_id' => 112,
                'participant_enroll_process_id' => 235,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 24,
                'created_at' => '2017-07-25 10:52:24',
                'updated_at' => '2017-07-25 10:52:24',
            ),
            25 => 
            array (
                'id' => 262,
                'process_enrolment_id' => 115,
                'participant_enroll_process_id' => 241,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 24,
                'created_at' => '2017-08-03 11:50:28',
                'updated_at' => '2017-08-03 11:50:28',
            ),
            26 => 
            array (
                'id' => 265,
                'process_enrolment_id' => 118,
                'participant_enroll_process_id' => 244,
                'event_type' => 'SESSION',
                'session_id' => 852,
                'package_id' => NULL,
                'created_at' => '2017-08-07 10:08:07',
                'updated_at' => '2017-08-07 10:08:07',
            ),
            27 => 
            array (
                'id' => 266,
                'process_enrolment_id' => 118,
                'participant_enroll_process_id' => 244,
                'event_type' => 'SESSION',
                'session_id' => 853,
                'package_id' => NULL,
                'created_at' => '2017-08-07 10:08:07',
                'updated_at' => '2017-08-07 10:08:07',
            ),
            28 => 
            array (
                'id' => 267,
                'process_enrolment_id' => 118,
                'participant_enroll_process_id' => 244,
                'event_type' => 'SESSION',
                'session_id' => 854,
                'package_id' => NULL,
                'created_at' => '2017-08-07 10:08:07',
                'updated_at' => '2017-08-07 10:08:07',
            ),
            29 => 
            array (
                'id' => 268,
                'process_enrolment_id' => 118,
                'participant_enroll_process_id' => 244,
                'event_type' => 'SESSION',
                'session_id' => 855,
                'package_id' => NULL,
                'created_at' => '2017-08-07 10:08:07',
                'updated_at' => '2017-08-07 10:08:07',
            ),
            30 => 
            array (
                'id' => 269,
                'process_enrolment_id' => 118,
                'participant_enroll_process_id' => 244,
                'event_type' => 'SESSION',
                'session_id' => 856,
                'package_id' => NULL,
                'created_at' => '2017-08-07 10:08:07',
                'updated_at' => '2017-08-07 10:08:07',
            ),
            31 => 
            array (
                'id' => 270,
                'process_enrolment_id' => 118,
                'participant_enroll_process_id' => 244,
                'event_type' => 'SESSION',
                'session_id' => 857,
                'package_id' => NULL,
                'created_at' => '2017-08-07 10:08:07',
                'updated_at' => '2017-08-07 10:08:07',
            ),
            32 => 
            array (
                'id' => 271,
                'process_enrolment_id' => 118,
                'participant_enroll_process_id' => 244,
                'event_type' => 'SESSION',
                'session_id' => 858,
                'package_id' => NULL,
                'created_at' => '2017-08-07 10:08:07',
                'updated_at' => '2017-08-07 10:08:07',
            ),
            33 => 
            array (
                'id' => 272,
                'process_enrolment_id' => 118,
                'participant_enroll_process_id' => 244,
                'event_type' => 'SESSION',
                'session_id' => 859,
                'package_id' => NULL,
                'created_at' => '2017-08-07 10:08:07',
                'updated_at' => '2017-08-07 10:08:07',
            ),
            34 => 
            array (
                'id' => 273,
                'process_enrolment_id' => 118,
                'participant_enroll_process_id' => 244,
                'event_type' => 'SESSION',
                'session_id' => 860,
                'package_id' => NULL,
                'created_at' => '2017-08-07 10:08:07',
                'updated_at' => '2017-08-07 10:08:07',
            ),
            35 => 
            array (
                'id' => 274,
                'process_enrolment_id' => 118,
                'participant_enroll_process_id' => 244,
                'event_type' => 'SESSION',
                'session_id' => 861,
                'package_id' => NULL,
                'created_at' => '2017-08-07 10:08:07',
                'updated_at' => '2017-08-07 10:08:07',
            ),
            36 => 
            array (
                'id' => 275,
                'process_enrolment_id' => 118,
                'participant_enroll_process_id' => 244,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 65,
                'created_at' => '2017-08-07 10:08:07',
                'updated_at' => '2017-08-07 10:08:07',
            ),
            37 => 
            array (
                'id' => 299,
                'process_enrolment_id' => 125,
                'participant_enroll_process_id' => 250,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 71,
                'created_at' => '2017-08-14 11:23:54',
                'updated_at' => '2017-08-14 11:23:54',
            ),
            38 => 
            array (
                'id' => 378,
                'process_enrolment_id' => 150,
                'participant_enroll_process_id' => 305,
                'event_type' => 'SESSION',
                'session_id' => 1454,
                'package_id' => NULL,
                'created_at' => '2017-09-06 11:31:03',
                'updated_at' => '2017-09-06 11:31:03',
            ),
            39 => 
            array (
                'id' => 379,
                'process_enrolment_id' => 150,
                'participant_enroll_process_id' => 306,
                'event_type' => 'SESSION',
                'session_id' => 1454,
                'package_id' => NULL,
                'created_at' => '2017-09-06 11:31:03',
                'updated_at' => '2017-09-06 11:31:03',
            ),
            40 => 
            array (
                'id' => 380,
                'process_enrolment_id' => 150,
                'participant_enroll_process_id' => 307,
                'event_type' => 'SESSION',
                'session_id' => 1454,
                'package_id' => NULL,
                'created_at' => '2017-09-06 11:31:03',
                'updated_at' => '2017-09-06 11:31:03',
            ),
            41 => 
            array (
                'id' => 381,
                'process_enrolment_id' => 150,
                'participant_enroll_process_id' => 308,
                'event_type' => 'SESSION',
                'session_id' => 1454,
                'package_id' => NULL,
                'created_at' => '2017-09-06 11:31:03',
                'updated_at' => '2017-09-06 11:31:03',
            ),
            42 => 
            array (
                'id' => 382,
                'process_enrolment_id' => 150,
                'participant_enroll_process_id' => 309,
                'event_type' => 'SESSION',
                'session_id' => 1454,
                'package_id' => NULL,
                'created_at' => '2017-09-06 11:31:03',
                'updated_at' => '2017-09-06 11:31:03',
            ),
            43 => 
            array (
                'id' => 383,
                'process_enrolment_id' => 150,
                'participant_enroll_process_id' => 310,
                'event_type' => 'SESSION',
                'session_id' => 1454,
                'package_id' => NULL,
                'created_at' => '2017-09-06 11:31:03',
                'updated_at' => '2017-09-06 11:31:03',
            ),
            44 => 
            array (
                'id' => 389,
                'process_enrolment_id' => 155,
                'participant_enroll_process_id' => 315,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 98,
                'created_at' => '2017-09-07 13:41:00',
                'updated_at' => '2017-09-07 13:41:00',
            ),
            45 => 
            array (
                'id' => 401,
                'process_enrolment_id' => 172,
                'participant_enroll_process_id' => 327,
                'event_type' => 'SESSION',
                'session_id' => 1723,
                'package_id' => NULL,
                'created_at' => '2017-09-14 08:34:01',
                'updated_at' => '2017-09-14 08:34:01',
            ),
            46 => 
            array (
                'id' => 402,
                'process_enrolment_id' => 173,
                'participant_enroll_process_id' => 328,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 107,
                'created_at' => '2017-09-14 08:39:24',
                'updated_at' => '2017-09-14 08:39:24',
            ),
            47 => 
            array (
                'id' => 404,
                'process_enrolment_id' => 176,
                'participant_enroll_process_id' => 330,
                'event_type' => 'SESSION',
                'session_id' => 1759,
                'package_id' => NULL,
                'created_at' => '2017-09-14 10:15:59',
                'updated_at' => '2017-09-14 10:15:59',
            ),
            48 => 
            array (
                'id' => 405,
                'process_enrolment_id' => 176,
                'participant_enroll_process_id' => 330,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 110,
                'created_at' => '2017-09-14 10:15:59',
                'updated_at' => '2017-09-14 10:15:59',
            ),
            49 => 
            array (
                'id' => 406,
                'process_enrolment_id' => 176,
                'participant_enroll_process_id' => 331,
                'event_type' => 'SESSION',
                'session_id' => 1759,
                'package_id' => NULL,
                'created_at' => '2017-09-14 10:15:59',
                'updated_at' => '2017-09-14 10:15:59',
            ),
            50 => 
            array (
                'id' => 407,
                'process_enrolment_id' => 176,
                'participant_enroll_process_id' => 331,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 110,
                'created_at' => '2017-09-14 10:15:59',
                'updated_at' => '2017-09-14 10:15:59',
            ),
            51 => 
            array (
                'id' => 409,
                'process_enrolment_id' => 178,
                'participant_enroll_process_id' => 333,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 111,
                'created_at' => '2017-09-14 10:21:08',
                'updated_at' => '2017-09-14 10:21:08',
            ),
            52 => 
            array (
                'id' => 410,
                'process_enrolment_id' => 180,
                'participant_enroll_process_id' => 334,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 116,
                'created_at' => '2017-09-14 12:36:30',
                'updated_at' => '2017-09-14 12:36:30',
            ),
            53 => 
            array (
                'id' => 411,
                'process_enrolment_id' => 181,
                'participant_enroll_process_id' => 335,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 115,
                'created_at' => '2017-09-14 13:20:13',
                'updated_at' => '2017-09-14 13:20:13',
            ),
            54 => 
            array (
                'id' => 412,
                'process_enrolment_id' => 182,
                'participant_enroll_process_id' => 336,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 116,
                'created_at' => '2017-09-14 13:22:15',
                'updated_at' => '2017-09-14 13:22:15',
            ),
            55 => 
            array (
                'id' => 426,
                'process_enrolment_id' => 207,
                'participant_enroll_process_id' => 348,
                'event_type' => 'SESSION',
                'session_id' => 2031,
                'package_id' => NULL,
                'created_at' => '2017-09-19 13:20:14',
                'updated_at' => '2017-09-19 13:20:14',
            ),
            56 => 
            array (
                'id' => 454,
                'process_enrolment_id' => 225,
                'participant_enroll_process_id' => 370,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 145,
                'created_at' => '2017-09-28 06:53:54',
                'updated_at' => '2017-09-28 06:53:54',
            ),
            57 => 
            array (
                'id' => 474,
                'process_enrolment_id' => 230,
                'participant_enroll_process_id' => 385,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 124,
                'created_at' => '2017-09-28 09:10:43',
                'updated_at' => '2017-09-28 09:10:43',
            ),
            58 => 
            array (
                'id' => 502,
                'process_enrolment_id' => 263,
                'participant_enroll_process_id' => 420,
                'event_type' => 'PACKAGE',
                'session_id' => NULL,
                'package_id' => 211,
                'created_at' => '2017-10-27 11:28:54',
                'updated_at' => '2017-10-27 11:28:54',
            ),
        ));
        
        
    }
}