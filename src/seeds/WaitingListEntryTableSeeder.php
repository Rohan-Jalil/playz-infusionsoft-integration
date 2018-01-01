<?php

use Illuminate\Database\Seeder;

class WaitingListEntryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('waiting_list_entry')->delete();
        
        
        
    }
}