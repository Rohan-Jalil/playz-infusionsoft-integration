<?php

use Illuminate\Database\Seeder;

class WaitingListExpiredTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('waiting_list_expired')->delete();
        
        \DB::table('waiting_list_expired')->insert(array (
            0 => 
            array (
                'id' => 2,
                'activity_id' => 91,
                'type' => 'RESERVATION_PACKAGE',
                'object_id' => 205,
                'owner_id' => 65,
                'firstname' => 'Lucy',
                'lastname' => 'Sharp',
                'email' => 'r.morley71@outlook.com',
                'code' => 'd4pI7ZgJaIGs0yfyjjrCliXPBxBhajmsgBUCEFDJmMqgRDPg52',
                'position' => 1,
                'included_events' => '[3990,3991,3992,3993,3994,3995,3996,3997,3998]',
                'expire_on' => '2017-11-05 23:59:00',
                'status' => 'QUEUED',
                'created_at' => '2017-10-31 09:24:19',
                'updated_at' => '2017-10-31 09:24:19',
                'sent_on' => '2017-10-31 09:24:19',
                'slots_allocated' => 1,
                'invite_message' => 'You have been waitlisted by <listing_provider> for the following sessions:<br>
<summary><br>
You will be notified when sessions become available.',
                'person_id' => 390,
            ),
            1 => 
            array (
                'id' => 288,
                'activity_id' => 88,
                'type' => 'RESERVATION_SESSION',
                'object_id' => 3959,
                'owner_id' => 61,
                'firstname' => 'Ella',
                'lastname' => 'Payne',
                'email' => 'kristie+customer@alliancesoftware.com.au',
                'code' => 'WwlOVhnnMtnlbcFsp3waD5SAKWUjDb664ZqBxAqMNrO40aRUcQ',
                'position' => 1,
                'included_events' => '[3959]',
                'expire_on' => '2017-10-27 23:59:00',
                'status' => 'QUEUED',
                'created_at' => '2017-10-25 09:25:04',
                'updated_at' => '2017-10-25 09:25:04',
                'sent_on' => '2017-10-25 09:25:04',
                'slots_allocated' => 1,
                'invite_message' => '<listing_provider> has reserved the following activity for you.<br><br>
<summary> <br><br>
This reservation will expire on <expiry_date> and your place may be offered to someone else on the waitlist. 
<br><br>
Click the "Book Now" button above to secure your place.
<br><br>',
                'person_id' => 379,
            ),
            2 => 
            array (
                'id' => 289,
                'activity_id' => 88,
                'type' => 'RESERVATION_SESSION',
                'object_id' => 3959,
                'owner_id' => 61,
                'firstname' => 'Ben',
                'lastname' => 'Payne',
                'email' => 'kristie+customer@allianceosoftware.com.au',
                'code' => 'acJ8vnYaIqUoArtsiBrYPMmXsHu7zSWuaPQ7gZVH7AOiwERhjH',
                'position' => 2,
                'included_events' => '[3959]',
                'expire_on' => '2017-10-27 23:59:00',
                'status' => 'QUEUED',
                'created_at' => '2017-10-25 09:25:04',
                'updated_at' => '2017-10-25 09:25:04',
                'sent_on' => '2017-10-25 09:25:04',
                'slots_allocated' => 1,
                'invite_message' => '<listing_provider> has reserved the following activity for you.<br><br>
<summary> <br><br>
This reservation will expire on <expiry_date> and your place may be offered to someone else on the waitlist. 
<br><br>
Click the "Book Now" button above to secure your place.
<br><br>',
                'person_id' => 380,
            ),
            3 => 
            array (
                'id' => 290,
                'activity_id' => 88,
                'type' => 'RESERVATION_SESSION',
                'object_id' => 3959,
                'owner_id' => 61,
                'firstname' => 'Nathan',
                'lastname' => 'Payne',
                'email' => 'kristie+customer@alliancesoftware.com.au',
                'code' => 'AQYVaRYeGUctJVllVqwhjDSbNdX6BnMbcAEtiMz62s1E9d3gRN',
                'position' => 3,
                'included_events' => '[3959]',
                'expire_on' => '2017-10-26 23:59:00',
                'status' => 'QUEUED',
                'created_at' => '2017-10-25 09:28:16',
                'updated_at' => '2017-10-25 09:28:16',
                'sent_on' => '2017-10-25 09:28:16',
                'slots_allocated' => 1,
                'invite_message' => '<listing_provider> has reserved the following activity for you.<br><br>
<summary> <br><br>
This reservation will expire on <expiry_date> and your place may be offered to someone else on the waitlist. 
<br><br>
Click the "Book Now" button above to secure your place.
<br><br>',
                'person_id' => 381,
            ),
            4 => 
            array (
                'id' => 291,
                'activity_id' => 88,
                'type' => 'RESERVATION_SESSION',
                'object_id' => 3959,
                'owner_id' => 61,
                'firstname' => 'Leigh',
                'lastname' => 'Payne',
                'email' => 'kristie+customer@alliancesoftware.com.au',
                'code' => '6QbHYj2YkSRYq2ILP8gcHS0S6MtXw54iQFtw09RzqZfVqGYlKX',
                'position' => 4,
                'included_events' => '[3959]',
                'expire_on' => '2017-10-26 23:59:00',
                'status' => 'QUEUED',
                'created_at' => '2017-10-25 09:28:17',
                'updated_at' => '2017-10-25 09:28:17',
                'sent_on' => '2017-10-25 09:28:17',
                'slots_allocated' => 1,
                'invite_message' => '<listing_provider> has reserved the following activity for you.<br><br>
<summary> <br><br>
This reservation will expire on <expiry_date> and your place may be offered to someone else on the waitlist. 
<br><br>
Click the "Book Now" button above to secure your place.
<br><br>',
                'person_id' => 382,
            ),
        ));
        
        
    }
}