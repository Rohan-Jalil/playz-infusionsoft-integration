<?php

use Illuminate\Database\Seeder;

class EnrolmentFieldGroupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('enrolment_field_group')->delete();
        
        \DB::table('enrolment_field_group')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Participant Details',
                'people_type' => 'CHILD',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Family Details',
                'people_type' => 'CHILD',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Cultural Background',
                'people_type' => 'CHILD',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Participant School Details',
                'people_type' => 'CHILD',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Health / Medical ',
                'people_type' => 'CHILD',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Other Information',
                'people_type' => 'CHILD',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Parent / Guardian Details',
                'people_type' => 'CHILD',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Emergency Contact',
                'people_type' => 'CHILD',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Parties - Customer Information',
                'people_type' => 'PARTY',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Parties - Function Information',
                'people_type' => 'PARTY',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}