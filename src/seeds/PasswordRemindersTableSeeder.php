<?php

use Illuminate\Database\Seeder;

class PasswordRemindersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_reminders')->delete();
        
        \DB::table('password_reminders')->insert(array (
            0 => 
            array (
                'email' => 'j_sharp70@bigpond.com',
                'token' => '7ff8bb02726209683a9fbd550d325e5933f15273e52d96b6657faa085cb62fdc',
                'created_at' => '2017-09-12 10:27:47',
            ),
        ));
        
        
    }
}