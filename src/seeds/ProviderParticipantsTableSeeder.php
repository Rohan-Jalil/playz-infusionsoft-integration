<?php

use Illuminate\Database\Seeder;

class ProviderParticipantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provider_participants')->delete();
        
        \DB::table('provider_participants')->insert(array (
            0 => 
            array (
                'id' => 1,
                'provider_id' => 1,
                'activity_id' => 1,
                'user_id' => 1,
                'person_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'provider_id' => 2,
                'activity_id' => 3,
                'user_id' => 2,
                'person_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'provider_id' => 2,
                'activity_id' => 3,
                'user_id' => 2,
                'person_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'provider_id' => 6,
                'activity_id' => 8,
                'user_id' => 6,
                'person_id' => 12,
            ),
            4 => 
            array (
                'id' => 5,
                'provider_id' => 6,
                'activity_id' => 8,
                'user_id' => 6,
                'person_id' => 13,
            ),
            5 => 
            array (
                'id' => 6,
                'provider_id' => 6,
                'activity_id' => 8,
                'user_id' => 6,
                'person_id' => 14,
            ),
            6 => 
            array (
                'id' => 7,
                'provider_id' => 6,
                'activity_id' => 8,
                'user_id' => 6,
                'person_id' => 9,
            ),
            7 => 
            array (
                'id' => 8,
                'provider_id' => 6,
                'activity_id' => 8,
                'user_id' => 6,
                'person_id' => 10,
            ),
            8 => 
            array (
                'id' => 9,
                'provider_id' => 6,
                'activity_id' => 8,
                'user_id' => 6,
                'person_id' => 11,
            ),
            9 => 
            array (
                'id' => 10,
                'provider_id' => 8,
                'activity_id' => 11,
                'user_id' => 8,
                'person_id' => 15,
            ),
            10 => 
            array (
                'id' => 11,
                'provider_id' => 8,
                'activity_id' => 11,
                'user_id' => 8,
                'person_id' => 17,
            ),
            11 => 
            array (
                'id' => 12,
                'provider_id' => 8,
                'activity_id' => 12,
                'user_id' => 8,
                'person_id' => 15,
            ),
            12 => 
            array (
                'id' => 13,
                'provider_id' => 8,
                'activity_id' => 12,
                'user_id' => 8,
                'person_id' => 16,
            ),
            13 => 
            array (
                'id' => 14,
                'provider_id' => 8,
                'activity_id' => 12,
                'user_id' => 8,
                'person_id' => 17,
            ),
            14 => 
            array (
                'id' => 15,
                'provider_id' => 8,
                'activity_id' => 12,
                'user_id' => 8,
                'person_id' => 18,
            ),
            15 => 
            array (
                'id' => 16,
                'provider_id' => 6,
                'activity_id' => 15,
                'user_id' => 6,
                'person_id' => 8,
            ),
            16 => 
            array (
                'id' => 17,
                'provider_id' => 8,
                'activity_id' => 12,
                'user_id' => 8,
                'person_id' => 19,
            ),
            17 => 
            array (
                'id' => 18,
                'provider_id' => 8,
                'activity_id' => 12,
                'user_id' => 8,
                'person_id' => 22,
            ),
            18 => 
            array (
                'id' => 19,
                'provider_id' => 6,
                'activity_id' => 16,
                'user_id' => 6,
                'person_id' => 26,
            ),
            19 => 
            array (
                'id' => 20,
                'provider_id' => 6,
                'activity_id' => 16,
                'user_id' => 6,
                'person_id' => 27,
            ),
            20 => 
            array (
                'id' => 21,
                'provider_id' => 2,
                'activity_id' => 4,
                'user_id' => 10,
                'person_id' => 28,
            ),
            21 => 
            array (
                'id' => 22,
                'provider_id' => 2,
                'activity_id' => 4,
                'user_id' => 10,
                'person_id' => 30,
            ),
            22 => 
            array (
                'id' => 23,
                'provider_id' => 6,
                'activity_id' => 20,
                'user_id' => 6,
                'person_id' => 9,
            ),
            23 => 
            array (
                'id' => 24,
                'provider_id' => 6,
                'activity_id' => 20,
                'user_id' => 6,
                'person_id' => 10,
            ),
            24 => 
            array (
                'id' => 25,
                'provider_id' => 6,
                'activity_id' => 20,
                'user_id' => 6,
                'person_id' => 55,
            ),
            25 => 
            array (
                'id' => 26,
                'provider_id' => 26,
                'activity_id' => 23,
                'user_id' => 9,
                'person_id' => 61,
            ),
            26 => 
            array (
                'id' => 27,
                'provider_id' => 26,
                'activity_id' => 23,
                'user_id' => 9,
                'person_id' => 70,
            ),
            27 => 
            array (
                'id' => 28,
                'provider_id' => 27,
                'activity_id' => 24,
                'user_id' => 19,
                'person_id' => 86,
            ),
            28 => 
            array (
                'id' => 29,
                'provider_id' => 26,
                'activity_id' => 23,
                'user_id' => 9,
                'person_id' => 90,
            ),
            29 => 
            array (
                'id' => 30,
                'provider_id' => 26,
                'activity_id' => 23,
                'user_id' => 9,
                'person_id' => 93,
            ),
            30 => 
            array (
                'id' => 31,
                'provider_id' => 27,
                'activity_id' => 24,
                'user_id' => 19,
                'person_id' => 97,
            ),
            31 => 
            array (
                'id' => 32,
                'provider_id' => 26,
                'activity_id' => 23,
                'user_id' => 9,
                'person_id' => 128,
            ),
            32 => 
            array (
                'id' => 33,
                'provider_id' => 26,
                'activity_id' => 23,
                'user_id' => 9,
                'person_id' => 136,
            ),
            33 => 
            array (
                'id' => 34,
                'provider_id' => 26,
                'activity_id' => 26,
                'user_id' => 9,
                'person_id' => 61,
            ),
            34 => 
            array (
                'id' => 35,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 9,
                'person_id' => 141,
            ),
            35 => 
            array (
                'id' => 36,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 9,
                'person_id' => 143,
            ),
            36 => 
            array (
                'id' => 37,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 26,
                'person_id' => 145,
            ),
            37 => 
            array (
                'id' => 38,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 26,
                'person_id' => 92,
            ),
            38 => 
            array (
                'id' => 39,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 9,
                'person_id' => 61,
            ),
            39 => 
            array (
                'id' => 40,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 9,
                'person_id' => 70,
            ),
            40 => 
            array (
                'id' => 41,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 9,
                'person_id' => 128,
            ),
            41 => 
            array (
                'id' => 42,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 9,
                'person_id' => 136,
            ),
            42 => 
            array (
                'id' => 43,
                'provider_id' => 29,
                'activity_id' => 29,
                'user_id' => 9,
                'person_id' => 61,
            ),
            43 => 
            array (
                'id' => 44,
                'provider_id' => 29,
                'activity_id' => 29,
                'user_id' => 9,
                'person_id' => 128,
            ),
            44 => 
            array (
                'id' => 45,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 21,
                'person_id' => 42,
            ),
            45 => 
            array (
                'id' => 46,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 21,
                'person_id' => 44,
            ),
            46 => 
            array (
                'id' => 47,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 21,
                'person_id' => 53,
            ),
            47 => 
            array (
                'id' => 48,
                'provider_id' => 21,
                'activity_id' => 30,
                'user_id' => 21,
                'person_id' => 44,
            ),
            48 => 
            array (
                'id' => 49,
                'provider_id' => 29,
                'activity_id' => 29,
                'user_id' => 29,
                'person_id' => 165,
            ),
            49 => 
            array (
                'id' => 50,
                'provider_id' => 29,
                'activity_id' => 29,
                'user_id' => 29,
                'person_id' => 9,
            ),
            50 => 
            array (
                'id' => 51,
                'provider_id' => 29,
                'activity_id' => 29,
                'user_id' => 29,
                'person_id' => 10,
            ),
            51 => 
            array (
                'id' => 52,
                'provider_id' => 29,
                'activity_id' => 29,
                'user_id' => 29,
                'person_id' => 154,
            ),
            52 => 
            array (
                'id' => 53,
                'provider_id' => 29,
                'activity_id' => 29,
                'user_id' => 29,
                'person_id' => 155,
            ),
            53 => 
            array (
                'id' => 54,
                'provider_id' => 29,
                'activity_id' => 29,
                'user_id' => 9,
                'person_id' => 141,
            ),
            54 => 
            array (
                'id' => 55,
                'provider_id' => 26,
                'activity_id' => 27,
                'user_id' => 31,
                'person_id' => 196,
            ),
            55 => 
            array (
                'id' => 56,
                'provider_id' => 29,
                'activity_id' => 40,
                'user_id' => 29,
                'person_id' => 141,
            ),
            56 => 
            array (
                'id' => 57,
                'provider_id' => 30,
                'activity_id' => 42,
                'user_id' => 31,
                'person_id' => 196,
            ),
            57 => 
            array (
                'id' => 58,
                'provider_id' => 29,
                'activity_id' => 39,
                'user_id' => 29,
                'person_id' => 141,
            ),
            58 => 
            array (
                'id' => 59,
                'provider_id' => 29,
                'activity_id' => 39,
                'user_id' => 9,
                'person_id' => 136,
            ),
            59 => 
            array (
                'id' => 60,
                'provider_id' => 33,
                'activity_id' => 44,
                'user_id' => 9,
                'person_id' => 143,
            ),
            60 => 
            array (
                'id' => 61,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 33,
                'person_id' => 233,
            ),
            61 => 
            array (
                'id' => 62,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 33,
                'person_id' => 234,
            ),
            62 => 
            array (
                'id' => 63,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 33,
                'person_id' => 235,
            ),
            63 => 
            array (
                'id' => 64,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 34,
                'person_id' => 240,
            ),
            64 => 
            array (
                'id' => 65,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 34,
                'person_id' => 238,
            ),
            65 => 
            array (
                'id' => 66,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 33,
                'person_id' => 243,
            ),
            66 => 
            array (
                'id' => 67,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 33,
                'person_id' => 244,
            ),
            67 => 
            array (
                'id' => 68,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 36,
                'person_id' => 246,
            ),
            68 => 
            array (
                'id' => 69,
                'provider_id' => 37,
                'activity_id' => 49,
                'user_id' => 37,
                'person_id' => 248,
            ),
            69 => 
            array (
                'id' => 70,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 39,
                'person_id' => 249,
            ),
            70 => 
            array (
                'id' => 71,
                'provider_id' => 40,
                'activity_id' => 53,
                'user_id' => 36,
                'person_id' => 253,
            ),
            71 => 
            array (
                'id' => 72,
                'provider_id' => 40,
                'activity_id' => 53,
                'user_id' => 36,
                'person_id' => 246,
            ),
            72 => 
            array (
                'id' => 73,
                'provider_id' => 40,
                'activity_id' => 53,
                'user_id' => 33,
                'person_id' => 234,
            ),
            73 => 
            array (
                'id' => 74,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 33,
                'person_id' => 273,
            ),
            74 => 
            array (
                'id' => 75,
                'provider_id' => 45,
                'activity_id' => 61,
                'user_id' => 43,
                'person_id' => 285,
            ),
            75 => 
            array (
                'id' => 76,
                'provider_id' => 45,
                'activity_id' => 61,
                'user_id' => 43,
                'person_id' => 301,
            ),
            76 => 
            array (
                'id' => 77,
                'provider_id' => 45,
                'activity_id' => 61,
                'user_id' => 43,
                'person_id' => 305,
            ),
            77 => 
            array (
                'id' => 78,
                'provider_id' => 42,
                'activity_id' => 57,
                'user_id' => 43,
                'person_id' => 285,
            ),
            78 => 
            array (
                'id' => 79,
                'provider_id' => 42,
                'activity_id' => 56,
                'user_id' => 43,
                'person_id' => 301,
            ),
            79 => 
            array (
                'id' => 80,
                'provider_id' => 42,
                'activity_id' => 57,
                'user_id' => 34,
                'person_id' => 320,
            ),
            80 => 
            array (
                'id' => 81,
                'provider_id' => 45,
                'activity_id' => 61,
                'user_id' => 43,
                'person_id' => 308,
            ),
            81 => 
            array (
                'id' => 82,
                'provider_id' => 42,
                'activity_id' => 56,
                'user_id' => 43,
                'person_id' => 329,
            ),
            82 => 
            array (
                'id' => 83,
                'provider_id' => 42,
                'activity_id' => 56,
                'user_id' => 43,
                'person_id' => 285,
            ),
            83 => 
            array (
                'id' => 84,
                'provider_id' => 42,
                'activity_id' => 56,
                'user_id' => 43,
                'person_id' => 305,
            ),
            84 => 
            array (
                'id' => 85,
                'provider_id' => 40,
                'activity_id' => 63,
                'user_id' => 34,
                'person_id' => 335,
            ),
            85 => 
            array (
                'id' => 86,
                'provider_id' => 45,
                'activity_id' => 61,
                'user_id' => 47,
                'person_id' => 337,
            ),
            86 => 
            array (
                'id' => 87,
                'provider_id' => 45,
                'activity_id' => 61,
                'user_id' => 43,
                'person_id' => 338,
            ),
            87 => 
            array (
                'id' => 88,
                'provider_id' => 45,
                'activity_id' => 61,
                'user_id' => 43,
                'person_id' => 347,
            ),
            88 => 
            array (
                'id' => 89,
                'provider_id' => 45,
                'activity_id' => 61,
                'user_id' => 45,
                'person_id' => 285,
            ),
            89 => 
            array (
                'id' => 90,
                'provider_id' => 41,
                'activity_id' => 67,
                'user_id' => 34,
                'person_id' => 335,
            ),
            90 => 
            array (
                'id' => 91,
                'provider_id' => 41,
                'activity_id' => 67,
                'user_id' => 34,
                'person_id' => 236,
            ),
            91 => 
            array (
                'id' => 92,
                'provider_id' => 45,
                'activity_id' => 61,
                'user_id' => 43,
                'person_id' => 356,
            ),
            92 => 
            array (
                'id' => 93,
                'provider_id' => 41,
                'activity_id' => 67,
                'user_id' => 34,
                'person_id' => 260,
            ),
            93 => 
            array (
                'id' => 94,
                'provider_id' => 45,
                'activity_id' => 69,
                'user_id' => 43,
                'person_id' => 308,
            ),
            94 => 
            array (
                'id' => 95,
                'provider_id' => 45,
                'activity_id' => 69,
                'user_id' => 45,
                'person_id' => 378,
            ),
            95 => 
            array (
                'id' => 96,
                'provider_id' => 33,
                'activity_id' => 80,
                'user_id' => 33,
                'person_id' => 236,
            ),
            96 => 
            array (
                'id' => 97,
                'provider_id' => 33,
                'activity_id' => 80,
                'user_id' => 33,
                'person_id' => 335,
            ),
            97 => 
            array (
                'id' => 98,
                'provider_id' => 33,
                'activity_id' => 80,
                'user_id' => 33,
                'person_id' => 364,
            ),
            98 => 
            array (
                'id' => 99,
                'provider_id' => 33,
                'activity_id' => 80,
                'user_id' => 33,
                'person_id' => 238,
            ),
            99 => 
            array (
                'id' => 100,
                'provider_id' => 33,
                'activity_id' => 80,
                'user_id' => 33,
                'person_id' => 240,
            ),
            100 => 
            array (
                'id' => 101,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 33,
                'person_id' => 236,
            ),
            101 => 
            array (
                'id' => 102,
                'provider_id' => 33,
                'activity_id' => 47,
                'user_id' => 33,
                'person_id' => 335,
            ),
            102 => 
            array (
                'id' => 103,
                'provider_id' => 61,
                'activity_id' => 88,
                'user_id' => 61,
                'person_id' => 379,
            ),
            103 => 
            array (
                'id' => 104,
                'provider_id' => 61,
                'activity_id' => 88,
                'user_id' => 61,
                'person_id' => 384,
            ),
            104 => 
            array (
                'id' => 105,
                'provider_id' => 61,
                'activity_id' => 88,
                'user_id' => 61,
                'person_id' => 385,
            ),
            105 => 
            array (
                'id' => 106,
                'provider_id' => 61,
                'activity_id' => 88,
                'user_id' => 61,
                'person_id' => 386,
            ),
            106 => 
            array (
                'id' => 107,
                'provider_id' => 61,
                'activity_id' => 88,
                'user_id' => 61,
                'person_id' => 387,
            ),
            107 => 
            array (
                'id' => 108,
                'provider_id' => 65,
                'activity_id' => 91,
                'user_id' => 65,
                'person_id' => 389,
            ),
            108 => 
            array (
                'id' => 109,
                'provider_id' => 65,
                'activity_id' => 91,
                'user_id' => 70,
                'person_id' => 388,
            ),
            109 => 
            array (
                'id' => 110,
                'provider_id' => 71,
                'activity_id' => 94,
                'user_id' => 62,
                'person_id' => 379,
            ),
            110 => 
            array (
                'id' => 111,
                'provider_id' => 75,
                'activity_id' => 95,
                'user_id' => 70,
                'person_id' => 388,
            ),
            111 => 
            array (
                'id' => 112,
                'provider_id' => 75,
                'activity_id' => 95,
                'user_id' => 70,
                'person_id' => 389,
            ),
            112 => 
            array (
                'id' => 113,
                'provider_id' => 75,
                'activity_id' => 95,
                'user_id' => 75,
                'person_id' => 390,
            ),
            113 => 
            array (
                'id' => 114,
                'provider_id' => 75,
                'activity_id' => 95,
                'user_id' => 70,
                'person_id' => 390,
            ),
        ));
        
        
    }
}