<?php

use Illuminate\Database\Seeder;

class InvitesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('invites')->delete();
        
        \DB::table('invites')->insert(array (
            0 => 
            array (
                'id' => 5,
                'user_id' => 9,
                'friend_id' => 0,
                'invite_email' => 'kristiepayne@alliancesoftware.com.au',
                'created_at' => '2017-08-08 13:33:59',
                'updated_at' => '2017-08-08 13:33:59',
            ),
            1 => 
            array (
                'id' => 6,
                'user_id' => 31,
                'friend_id' => 0,
                'invite_email' => 'manasi.pathirana+friend@alliancesoftware.com.au',
                'created_at' => '2017-09-07 08:39:19',
                'updated_at' => '2017-09-07 08:39:19',
            ),
        ));
        
        
    }
}