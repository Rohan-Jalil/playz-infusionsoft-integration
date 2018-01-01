<?php

use Illuminate\Database\Seeder;

class TrItsecLockoutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tr_itsec_lockouts')->delete();
        
        
        
    }
}