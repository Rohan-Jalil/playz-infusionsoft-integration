<?php

use Illuminate\Database\Seeder;

class ActivityVenueTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_venue')->delete();
        
        \DB::table('activity_venue')->insert(array (
            0 => 
            array (
                'id' => 30,
                'user_id' => 33,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Rachel\'s Music Hall',
                'transport' => '["TRAIN","TRAM"]',
                'transport_other' => '',
                'shelter' => '["INDOORS"]',
                'cooling' => '["FAN","HEATING","AIRCO"]',
                'parking' => '["ON_STREET"]',
                'wheelchair_access' => 1,
                'airco' => 1,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 1,
                'undercover' => 1,
                'created_at' => '2017-09-13 10:37:56',
                'updated_at' => '2017-09-13 10:39:01',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 31,
                'user_id' => 37,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Kids activity providers Headquarters',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-14 09:23:50',
                'updated_at' => '2017-09-14 09:30:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 32,
                'user_id' => 38,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Tennis Yarrazumba Headquarters',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 1,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-14 09:47:54',
                'updated_at' => '2017-09-14 09:47:54',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 33,
                'user_id' => 38,
                'type' => 'MOBILE',
                'status' => 'ACTIVE',
                'name' => 'Coach Burghart',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-14 09:54:24',
                'updated_at' => '2017-09-14 09:55:41',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 34,
                'user_id' => 38,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Tennis Courts',
                'transport' => '["BUS"]',
                'transport_other' => '',
                'shelter' => '["COVER"]',
                'cooling' => '[]',
                'parking' => '["CAR_PARK_FREE"]',
                'wheelchair_access' => 1,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 1,
                'undercover' => 1,
                'created_at' => '2017-09-14 09:56:35',
                'updated_at' => '2017-09-14 09:57:29',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 35,
                'user_id' => 40,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Cooking Company Headquarters',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-15 11:07:57',
                'updated_at' => '2017-09-15 12:25:28',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 36,
                'user_id' => 40,
                'type' => 'MOBILE',
                'status' => 'ACTIVE',
                'name' => 'Party Food Van',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-19 10:04:59',
                'updated_at' => '2017-09-19 10:06:27',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 37,
                'user_id' => 41,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Dance Academy Headquarters',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-19 13:31:01',
                'updated_at' => '2017-09-19 13:34:02',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 38,
                'user_id' => 42,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Berry Picking Headquarters',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-19 14:27:03',
                'updated_at' => '2017-09-20 10:10:58',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 39,
                'user_id' => 45,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Kristie\'s Fun Activities Headquarters',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 1,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-21 11:17:57',
                'updated_at' => '2017-09-21 11:17:57',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 40,
                'user_id' => 45,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Pitcher Park Alphington',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-21 11:36:35',
                'updated_at' => '2017-09-21 11:38:05',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 41,
                'user_id' => 37,
                'type' => '',
                'status' => 'DRAFT',
                'name' => '',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-22 10:29:52',
                'updated_at' => '2017-09-22 10:29:52',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 42,
                'user_id' => 49,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Victorian state cheerleaders Headquarters',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 1,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-27 10:28:43',
                'updated_at' => '2017-09-27 10:28:43',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 43,
                'user_id' => 49,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Victorian State cheerleaders',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '["HEATING"]',
                'parking' => '["CAR_PARK"]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-27 10:38:08',
                'updated_at' => '2017-09-27 10:38:25',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 44,
                'user_id' => 50,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'PLayzLinks Org Headquarters',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-27 13:59:59',
                'updated_at' => '2017-09-27 14:04:31',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 45,
                'user_id' => 51,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Apple Activities Headquarters',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-09-29 06:45:19',
                'updated_at' => '2017-09-29 07:01:41',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 46,
                'user_id' => 51,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Apple Activities HQ',
                'transport' => '["TRAM"]',
                'transport_other' => '',
                'shelter' => '["INDOORS"]',
                'cooling' => '["HEATING","AIRCO"]',
                'parking' => '["ON_STREET_FREE"]',
                'wheelchair_access' => 1,
                'airco' => 1,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 1,
                'undercover' => 1,
                'created_at' => '2017-09-29 06:51:59',
                'updated_at' => '2017-09-29 06:53:21',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 47,
                'user_id' => 52,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Tennis Club Headquarters',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 1,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-10-02 08:01:14',
                'updated_at' => '2017-10-02 08:01:14',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 48,
                'user_id' => 54,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Out Of The Box Solutions Headquarters',
                'transport' => '["TRAM"]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 1,
                'undercover' => 0,
                'created_at' => '2017-10-10 13:44:19',
                'updated_at' => '2017-10-10 15:14:49',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 49,
                'user_id' => 55,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'This org Headquarters',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 1,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-10-12 08:53:42',
                'updated_at' => '2017-10-12 08:53:42',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 50,
                'user_id' => 56,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'RACHEL +10 Headquarters',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 1,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-10-13 10:53:58',
                'updated_at' => '2017-10-13 10:53:58',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 51,
                'user_id' => 57,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'test Headquarters',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 1,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-10-17 15:21:14',
                'updated_at' => '2017-10-17 15:21:14',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 52,
                'user_id' => 58,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'test business Headquarters',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-10-17 15:25:06',
                'updated_at' => '2017-10-17 15:33:42',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 53,
                'user_id' => 59,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Sunnytime Kids\' Classes Headquarters',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-10-18 08:50:19',
                'updated_at' => '2017-10-19 13:12:45',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 54,
                'user_id' => 60,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Magic Music Lessons Headquarters',
                'transport' => '["TRAIN"]',
                'transport_other' => '',
                'shelter' => '["INDOORS"]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 1,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 1,
                'undercover' => 1,
                'created_at' => '2017-10-24 10:49:53',
                'updated_at' => '2017-10-24 11:49:32',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 55,
                'user_id' => 61,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Kristie\'s Awesome organisation Headquarters',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 1,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-10-25 09:03:50',
                'updated_at' => '2017-10-25 09:03:50',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 56,
                'user_id' => 61,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Pitcher Park',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-10-25 09:10:25',
                'updated_at' => '2017-10-25 09:11:00',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 57,
                'user_id' => 64,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Sunnytime Kids\' Classes Headquarters',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-10-25 12:00:34',
                'updated_at' => '2017-10-25 12:04:18',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 58,
                'user_id' => 65,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Penny\'s Piano Lessons Headquarters',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-10-26 10:02:22',
                'updated_at' => '2017-10-26 10:08:19',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 59,
                'user_id' => 67,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Tim\'s Tennis Headquarters',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 1,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-10-31 09:11:44',
                'updated_at' => '2017-10-31 09:11:44',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 60,
                'user_id' => 71,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Test Headquarters',
                'transport' => '[]',
                'transport_other' => '',
                'shelter' => '[]',
                'cooling' => '[]',
                'parking' => '[]',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-11-02 14:54:28',
                'updated_at' => '2017-11-02 14:56:38',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 61,
                'user_id' => 74,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Stripe Live Account Headquarters',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 1,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-11-03 09:22:19',
                'updated_at' => '2017-11-03 09:22:19',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 62,
                'user_id' => 75,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Crafty Critters Headquarters',
                'transport' => '["TRAIN","TRAM"]',
                'transport_other' => '',
                'shelter' => '["INDOORS"]',
                'cooling' => '["HEATING","AIRCO"]',
                'parking' => '["ON_STREET","ON_STREET_FREE"]',
                'wheelchair_access' => 0,
                'airco' => 1,
                'prefilled' => 0,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 1,
                'undercover' => 1,
                'created_at' => '2017-11-03 12:33:55',
                'updated_at' => '2017-11-03 12:38:36',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 63,
                'user_id' => 76,
                'type' => 'FIXED',
                'status' => 'ACTIVE',
                'name' => 'Fiona\'s Flut lessons Headquarters',
                'transport' => '',
                'transport_other' => '',
                'shelter' => '',
                'cooling' => '',
                'parking' => '',
                'wheelchair_access' => 0,
                'airco' => 0,
                'prefilled' => 1,
                'has_holidays' => 0,
                'has_classes' => 0,
                'has_fun' => 0,
                'has_parties' => 0,
                'public_transport' => 0,
                'undercover' => 0,
                'created_at' => '2017-11-06 13:32:06',
                'updated_at' => '2017-11-06 13:32:06',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}