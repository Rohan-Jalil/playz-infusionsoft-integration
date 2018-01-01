<?php

use Illuminate\Database\Seeder;

class UserFavouritesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_favourites')->delete();
        
        \DB::table('user_favourites')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 39,
                'activity_id' => 57,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}