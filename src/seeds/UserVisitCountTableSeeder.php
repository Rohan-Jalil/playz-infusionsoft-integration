<?php

use Illuminate\Database\Seeder;

class UserVisitCountTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_visit_count')->delete();
        
        \DB::table('user_visit_count')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'year' => 2017,
                'month' => 4,
                'count' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'year' => 2017,
                'month' => 4,
                'count' => 13,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 4,
                'year' => 2017,
                'month' => 4,
                'count' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 5,
                'year' => 2017,
                'month' => 4,
                'count' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 6,
                'year' => 2017,
                'month' => 4,
                'count' => 4,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 7,
                'year' => 2017,
                'month' => 5,
                'count' => 7,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 8,
                'year' => 2017,
                'month' => 5,
                'count' => 11,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 6,
                'year' => 2017,
                'month' => 5,
                'count' => 24,
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 5,
                'year' => 2017,
                'month' => 5,
                'count' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 2,
                'year' => 2017,
                'month' => 5,
                'count' => 11,
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 4,
                'year' => 2017,
                'month' => 5,
                'count' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 10,
                'year' => 2017,
                'month' => 5,
                'count' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 11,
                'year' => 2017,
                'month' => 7,
                'count' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 17,
                'year' => 2017,
                'month' => 7,
                'count' => 2,
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 18,
                'year' => 2017,
                'month' => 7,
                'count' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 19,
                'year' => 2017,
                'month' => 7,
                'count' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 20,
                'year' => 2017,
                'month' => 7,
                'count' => 3,
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 6,
                'year' => 2017,
                'month' => 7,
                'count' => 9,
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 12,
                'year' => 2017,
                'month' => 7,
                'count' => 7,
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 21,
                'year' => 2017,
                'month' => 7,
                'count' => 17,
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 22,
                'year' => 2017,
                'month' => 7,
                'count' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 23,
                'year' => 2017,
                'month' => 7,
                'count' => 2,
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 24,
                'year' => 2017,
                'month' => 7,
                'count' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 24,
                'year' => 2017,
                'month' => 8,
                'count' => 5,
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 6,
                'year' => 2017,
                'month' => 8,
                'count' => 9,
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 21,
                'year' => 2017,
                'month' => 8,
                'count' => 45,
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 25,
                'year' => 2017,
                'month' => 8,
                'count' => 4,
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 27,
                'year' => 2017,
                'month' => 8,
                'count' => 16,
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 26,
                'year' => 2017,
                'month' => 8,
                'count' => 37,
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 9,
                'year' => 2017,
                'month' => 8,
                'count' => 14,
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 19,
                'year' => 2017,
                'month' => 8,
                'count' => 12,
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 29,
                'year' => 2017,
                'month' => 8,
                'count' => 20,
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 21,
                'year' => 2017,
                'month' => 9,
                'count' => 11,
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 29,
                'year' => 2017,
                'month' => 9,
                'count' => 36,
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 30,
                'year' => 2017,
                'month' => 9,
                'count' => 21,
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 31,
                'year' => 2017,
                'month' => 9,
                'count' => 12,
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 19,
                'year' => 2017,
                'month' => 9,
                'count' => 2,
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 9,
                'year' => 2017,
                'month' => 9,
                'count' => 2,
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 33,
                'year' => 2017,
                'month' => 9,
                'count' => 36,
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 34,
                'year' => 2017,
                'month' => 9,
                'count' => 16,
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 36,
                'year' => 2017,
                'month' => 9,
                'count' => 4,
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 37,
                'year' => 2017,
                'month' => 9,
                'count' => 16,
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 25,
                'year' => 2017,
                'month' => 9,
                'count' => 5,
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 38,
                'year' => 2017,
                'month' => 9,
                'count' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 39,
                'year' => 2017,
                'month' => 9,
                'count' => 7,
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 24,
                'year' => 2017,
                'month' => 9,
                'count' => 2,
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 40,
                'year' => 2017,
                'month' => 9,
                'count' => 12,
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 41,
                'year' => 2017,
                'month' => 9,
                'count' => 24,
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 42,
                'year' => 2017,
                'month' => 9,
                'count' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 43,
                'year' => 2017,
                'month' => 9,
                'count' => 27,
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 44,
                'year' => 2017,
                'month' => 9,
                'count' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 45,
                'year' => 2017,
                'month' => 9,
                'count' => 15,
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 46,
                'year' => 2017,
                'month' => 9,
                'count' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 49,
                'year' => 2017,
                'month' => 9,
                'count' => 3,
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 50,
                'year' => 2017,
                'month' => 9,
                'count' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 51,
                'year' => 2017,
                'month' => 9,
                'count' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 51,
                'year' => 2017,
                'month' => 10,
                'count' => 4,
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 40,
                'year' => 2017,
                'month' => 10,
                'count' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => 34,
                'year' => 2017,
                'month' => 10,
                'count' => 3,
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => 33,
                'year' => 2017,
                'month' => 10,
                'count' => 43,
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => 50,
                'year' => 2017,
                'month' => 10,
                'count' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => 43,
                'year' => 2017,
                'month' => 10,
                'count' => 17,
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => 45,
                'year' => 2017,
                'month' => 10,
                'count' => 21,
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => 45,
                'year' => 2017,
                'month' => 10,
                'count' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => 52,
                'year' => 2017,
                'month' => 10,
                'count' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => 41,
                'year' => 2017,
                'month' => 10,
                'count' => 4,
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => 54,
                'year' => 2017,
                'month' => 10,
                'count' => 4,
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => 56,
                'year' => 2017,
                'month' => 10,
                'count' => 2,
            ),
            68 => 
            array (
                'id' => 69,
                'user_id' => 25,
                'year' => 2017,
                'month' => 10,
                'count' => 7,
            ),
            69 => 
            array (
                'id' => 70,
                'user_id' => 58,
                'year' => 2017,
                'month' => 10,
                'count' => 6,
            ),
            70 => 
            array (
                'id' => 71,
                'user_id' => 57,
                'year' => 2017,
                'month' => 10,
                'count' => 2,
            ),
            71 => 
            array (
                'id' => 72,
                'user_id' => 59,
                'year' => 2017,
                'month' => 10,
                'count' => 6,
            ),
            72 => 
            array (
                'id' => 73,
                'user_id' => 24,
                'year' => 2017,
                'month' => 10,
                'count' => 2,
            ),
            73 => 
            array (
                'id' => 74,
                'user_id' => 60,
                'year' => 2017,
                'month' => 10,
                'count' => 10,
            ),
            74 => 
            array (
                'id' => 75,
                'user_id' => 61,
                'year' => 2017,
                'month' => 10,
                'count' => 11,
            ),
            75 => 
            array (
                'id' => 76,
                'user_id' => 64,
                'year' => 2017,
                'month' => 10,
                'count' => 4,
            ),
            76 => 
            array (
                'id' => 77,
                'user_id' => 65,
                'year' => 2017,
                'month' => 10,
                'count' => 12,
            ),
            77 => 
            array (
                'id' => 78,
                'user_id' => 67,
                'year' => 2017,
                'month' => 10,
                'count' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'user_id' => 61,
                'year' => 2017,
                'month' => 11,
                'count' => 17,
            ),
            79 => 
            array (
                'id' => 80,
                'user_id' => 65,
                'year' => 2017,
                'month' => 11,
                'count' => 10,
            ),
            80 => 
            array (
                'id' => 81,
                'user_id' => 25,
                'year' => 2017,
                'month' => 11,
                'count' => 6,
            ),
            81 => 
            array (
                'id' => 82,
                'user_id' => 64,
                'year' => 2017,
                'month' => 11,
                'count' => 4,
            ),
            82 => 
            array (
                'id' => 83,
                'user_id' => 71,
                'year' => 2017,
                'month' => 11,
                'count' => 3,
            ),
            83 => 
            array (
                'id' => 84,
                'user_id' => 62,
                'year' => 2017,
                'month' => 11,
                'count' => 6,
            ),
            84 => 
            array (
                'id' => 85,
                'user_id' => 73,
                'year' => 2017,
                'month' => 11,
                'count' => 2,
            ),
            85 => 
            array (
                'id' => 86,
                'user_id' => 74,
                'year' => 2017,
                'month' => 11,
                'count' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'user_id' => 75,
                'year' => 2017,
                'month' => 11,
                'count' => 15,
            ),
            87 => 
            array (
                'id' => 88,
                'user_id' => 70,
                'year' => 2017,
                'month' => 11,
                'count' => 7,
            ),
            88 => 
            array (
                'id' => 89,
                'user_id' => 76,
                'year' => 2017,
                'month' => 11,
                'count' => 1,
            ),
        ));
        
        
    }
}