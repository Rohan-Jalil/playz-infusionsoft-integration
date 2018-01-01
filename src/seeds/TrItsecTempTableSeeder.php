<?php

use Illuminate\Database\Seeder;

class TrItsecTempTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tr_itsec_temp')->delete();
        
        
        
    }
}