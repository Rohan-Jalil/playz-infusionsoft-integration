<?php

use Illuminate\Database\Seeder;

class ActivitySpecialNeedsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_special_needs')->delete();
        
        \DB::table('activity_special_needs')->insert(array (
            0 => 
            array (
                'activity_id' => 11,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'activity_id' => 11,
                'special_needs_id' => 2,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'activity_id' => 12,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'activity_id' => 12,
                'special_needs_id' => 99,
                'other_name' => 'sgdfs',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'activity_id' => 10,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'activity_id' => 10,
                'special_needs_id' => 3,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'activity_id' => 10,
                'special_needs_id' => 2,
                'other_name' => '',
                'catering_for' => 'SPECIFICALLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'activity_id' => 24,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'activity_id' => 24,
                'special_needs_id' => 2,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'activity_id' => 24,
                'special_needs_id' => 3,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'activity_id' => 21,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'activity_id' => 21,
                'special_needs_id' => 3,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'activity_id' => 21,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'SPECIFICALLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'activity_id' => 21,
                'special_needs_id' => 3,
                'other_name' => '',
                'catering_for' => 'SPECIFICALLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'activity_id' => 50,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'activity_id' => 50,
                'special_needs_id' => 3,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'activity_id' => 50,
                'special_needs_id' => 5,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'activity_id' => 63,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'activity_id' => 63,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'SPECIFICALLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'activity_id' => 71,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'activity_id' => 71,
                'special_needs_id' => 3,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'activity_id' => 71,
                'special_needs_id' => 99,
                'other_name' => 'special needs',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'activity_id' => 84,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'activity_id' => 84,
                'special_needs_id' => 3,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'activity_id' => 95,
                'special_needs_id' => 1,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'activity_id' => 95,
                'special_needs_id' => 3,
                'other_name' => '',
                'catering_for' => 'FRIENDLY_FOR',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}