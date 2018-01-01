<?php

use Illuminate\Database\Seeder;

class ProviderAdditionalItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provider_additional_items')->delete();
        
        \DB::table('provider_additional_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Computer',
                'price' => '1000.00',
                'is_poa' => 0,
                'user_id' => 1,
                'created_at' => '2017-04-24 15:54:11',
                'updated_at' => '2017-04-24 15:54:11',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Hot Shots T Shirt',
                'price' => '20.00',
                'is_poa' => 0,
                'user_id' => 6,
                'created_at' => '2017-04-28 09:27:16',
                'updated_at' => '2017-04-28 09:27:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'drink bottle',
                'price' => '5.00',
                'is_poa' => 0,
                'user_id' => 6,
                'created_at' => '2017-04-28 09:27:38',
                'updated_at' => '2017-04-28 09:27:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'letter cards',
                'price' => '10.00',
                'is_poa' => 0,
                'user_id' => 8,
                'created_at' => '2017-05-01 11:21:24',
                'updated_at' => '2017-05-01 11:21:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'readers set 1',
                'price' => '100.00',
                'is_poa' => 0,
                'user_id' => 8,
                'created_at' => '2017-05-01 11:21:51',
                'updated_at' => '2017-05-01 11:21:51',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'stationary',
                'price' => '10.00',
                'is_poa' => 0,
                'user_id' => 8,
                'created_at' => '2017-05-04 13:12:26',
                'updated_at' => '2017-05-04 13:12:26',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'stationery',
                'price' => '10.00',
                'is_poa' => 0,
                'user_id' => 6,
                'created_at' => '2017-05-04 13:12:29',
                'updated_at' => '2017-05-04 13:12:29',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'paper',
                'price' => '3.00',
                'is_poa' => 0,
                'user_id' => 7,
                'created_at' => '2017-05-09 09:46:01',
                'updated_at' => '2017-05-09 09:46:01',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Cake',
                'price' => '50.00',
                'is_poa' => 0,
                'user_id' => 21,
                'created_at' => '2017-07-28 13:03:55',
                'updated_at' => '2017-07-28 13:03:55',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'T shirt',
                'price' => '20.00',
                'is_poa' => 0,
                'user_id' => 27,
                'created_at' => '2017-08-04 13:03:13',
                'updated_at' => '2017-08-04 13:03:13',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Hat',
                'price' => '15.00',
                'is_poa' => 0,
                'user_id' => 27,
                'created_at' => '2017-08-04 13:06:03',
                'updated_at' => '2017-08-04 13:06:03',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Chocolate Cake',
                'price' => '50.00',
                'is_poa' => 0,
                'user_id' => 27,
                'created_at' => '2017-08-04 13:06:20',
                'updated_at' => '2017-08-04 13:06:20',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Vanilla Cake',
                'price' => '50.00',
                'is_poa' => 0,
                'user_id' => 27,
                'created_at' => '2017-08-04 13:06:35',
                'updated_at' => '2017-08-04 13:06:35',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Music book',
                'price' => '20.00',
                'is_poa' => 0,
                'user_id' => 26,
                'created_at' => '2017-08-04 13:52:03',
                'updated_at' => '2017-08-04 13:52:03',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'apron',
                'price' => '10.00',
                'is_poa' => 0,
                'user_id' => 29,
                'created_at' => '2017-08-24 09:42:28',
                'updated_at' => '2017-08-24 09:42:28',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Bathers',
                'price' => '30.00',
                'is_poa' => 0,
                'user_id' => 21,
                'created_at' => '2017-08-24 13:45:54',
                'updated_at' => '2017-08-24 13:45:54',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'T-shirt with name',
                'price' => '25.00',
                'is_poa' => 0,
                'user_id' => 30,
                'created_at' => '2017-09-04 12:24:48',
                'updated_at' => '2017-09-04 12:24:48',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'cake - ice cream',
                'price' => '50.00',
                'is_poa' => 0,
                'user_id' => 29,
                'created_at' => '2017-09-06 10:49:20',
                'updated_at' => '2017-09-06 10:49:20',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'lolly bag',
                'price' => '2.50',
                'is_poa' => 0,
                'user_id' => 29,
                'created_at' => '2017-09-06 10:49:50',
                'updated_at' => '2017-09-06 10:49:50',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Masterchef cookbook',
                'price' => '25.00',
                'is_poa' => 0,
                'user_id' => 29,
                'created_at' => '2017-09-11 11:15:16',
                'updated_at' => '2017-09-11 11:15:16',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '2017 EOY Concert Program',
                'price' => '5.00',
                'is_poa' => 0,
                'user_id' => 33,
                'created_at' => '2017-09-12 12:22:44',
                'updated_at' => '2017-09-12 12:22:54',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Healthy Lunch',
                'price' => '25.00',
                'is_poa' => 0,
                'user_id' => 38,
                'created_at' => '2017-09-14 10:11:23',
                'updated_at' => '2017-09-14 10:11:23',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Tennis Racquet',
                'price' => '15.00',
                'is_poa' => 0,
                'user_id' => 38,
                'created_at' => '2017-09-14 10:11:46',
                'updated_at' => '2017-09-14 10:11:46',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Ice cream cake',
                'price' => '50.00',
                'is_poa' => 0,
                'user_id' => 40,
                'created_at' => '2017-09-19 10:14:56',
                'updated_at' => '2017-09-19 10:14:56',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'party favour',
                'price' => '2.50',
                'is_poa' => 0,
                'user_id' => 40,
                'created_at' => '2017-09-19 10:15:33',
                'updated_at' => '2017-09-19 10:15:33',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'lolly bag',
                'price' => '5.00',
                'is_poa' => 0,
                'user_id' => 40,
                'created_at' => '2017-09-19 13:18:54',
                'updated_at' => '2017-09-19 13:18:54',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'drink bottle',
                'price' => '20.00',
                'is_poa' => 0,
                'user_id' => 41,
                'created_at' => '2017-09-19 13:38:08',
                'updated_at' => '2017-09-19 13:38:08',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Cricket Bat',
                'price' => '50.00',
                'is_poa' => 0,
                'user_id' => 45,
                'created_at' => '2017-09-21 11:51:51',
                'updated_at' => '2017-09-21 11:51:51',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Soccer Ball',
                'price' => '30.00',
                'is_poa' => 0,
                'user_id' => 45,
                'created_at' => '2017-09-27 15:01:29',
                'updated_at' => '2017-09-27 15:01:29',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'TShirts',
                'price' => '15.00',
                'is_poa' => 0,
                'user_id' => 51,
                'created_at' => '2017-10-01 12:27:47',
                'updated_at' => '2017-10-01 12:27:47',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'hat',
                'price' => '20.00',
                'is_poa' => 0,
                'user_id' => 59,
                'created_at' => '2017-10-19 13:19:28',
                'updated_at' => '2017-10-19 13:19:28',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'drink bottle',
                'price' => '10.00',
                'is_poa' => 0,
                'user_id' => 59,
                'created_at' => '2017-10-19 13:23:49',
                'updated_at' => '2017-10-19 13:23:49',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'music diary',
                'price' => '10.00',
                'is_poa' => 0,
                'user_id' => 60,
                'created_at' => '2017-10-24 12:05:49',
                'updated_at' => '2017-10-24 12:05:49',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'apron',
                'price' => '1.00',
                'is_poa' => 0,
                'user_id' => 75,
                'created_at' => '2017-11-03 12:41:34',
                'updated_at' => '2017-11-03 12:41:34',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}