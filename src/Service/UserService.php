<?php

namespace Agencymates\Playz\Service;


use Agencymates\Playz\Service\InfusionsoftService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use DateTime;



class UserService
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $infs;

    public function index()
    {
//        $users = DB::select('select * from users where active = ?', [1]);
    }

    /**
     * function which will search and return contact details or blank array as per the status of the search from the infusionsoft 
     *
     */

    public function search($user_details = []){

        $infs = $this->infs;

        #first search using user id 
        $infs_user = $infs->searchContact("_WPUserId", $user_details->id);

        if( !isset($infs_user["Id"]) && $user_details->email != "" ){

            #first search using email
            $infs_user = $infs->searchContact("Email", $user_details->email);

            if( !isset($infs_user["Id"]) ){
                #first search using lower case email 
                $infs_user = $infs->searchContact("Email", strtolower($user_details->email));
            }
        }

        $user_details->INFS_DATA = (array)$infs_user;

        return $user_details;
    }



    #function which will find the membership level
    public function findMembershipLevel($user_id){
        
        $category_mapping = ["Holiday Programs"=>"Holiday", "Classes & Clubs"=>"Classes", "Parties"=>"Parties", "Fun Stuff To Do"=>"Fun"];
        
        $activity_category = ["activity_types_offered"=>[], "membership_level"=>"", "membership_category"=>"", "membership_tag"=>0];
        $activity_res = DB::select('SELECT type, category.name as category_name, activities.name as activity_name from activities, activity_category, category where activities.status="ENABLED" and activities.id=activity_category.activity_id and category.id=activity_category.category_id and user_id = ? order by activities.id desc', [$user_id]);
        foreach($activity_res as $data){
            
            if(!in_array($data->category_name, $activity_category["activity_types_offered"])) $activity_category["activity_types_offered"][] = $data->category_name;
            
            if( trim(strtolower($data->type)) == "workz" && trim(strtolower($activity_category["membership_level"])) != "workz" ){
                $activity_category["membership_level"] = trim($data->type);
                $activity_category["membership_category"] = trim($data->category_name);
            }
            else if( trim(strtolower($data->type)) == "linkz" && !in_array(trim(strtolower($activity_category["membership_level"])), array("workz", "linkz")) ){
                $activity_category["membership_level"] = trim($data->type);
                $activity_category["membership_category"] = trim($data->category_name);
            }
            else if( trim(strtolower($data->type)) == "listing" && !in_array(trim(strtolower($activity_category["membership_level"])), array("workz", "linkz", "listing")) ){
                $activity_category["membership_level"] = trim($data->type);
                $activity_category["membership_category"] = trim($data->category_name);
            }
        }
        if($activity_category["membership_level"] != "" && $activity_category["membership_category"] != ""){
            $activity_category["membership_level"] = $category_mapping[$activity_category["membership_category"]]." ".$activity_category["membership_level"];
            $infs_tag = config("infusionsoft.ACTIVITY_TAGS");
            if(isset($infs_tag[$activity_category["membership_level"]])) 
                $activity_category["membership_tag"] = $infs_tag[$activity_category["membership_level"]];

            $activity_category["activity_tags"] = $infs_tag;
        }
        return $activity_category;
    }#end of findMembershipLevel function 

    #function to fetch the various counts  
    public function findActivityCount($user_id){
        
        $count = ["Numberofpageviews"=>0, "Numberofcustomerinquiries"=>0, "Numberofordersreceived"=>0];
        
        #find the number of page views 
        $activity_res = DB::select('SELECT count(*) as activity_count from activity_view_count where provider_id = ? ', [$user_id]);
        if(count($activity_res) > 0 && isset($activity_res[0]->activity_count)) $count["Numberofpageviews"] = $activity_res[0]->activity_count;
        
        #find number of customer enquiries 
        $activity_res = DB::select('SELECT count(*) as activity_count from activities, activity_enquiry_log where activities.id=activity_enquiry_log.activity_id and  activities.user_id = ? ', [$user_id]);
        if(count($activity_res) > 0 && isset($activity_res[0]->activity_count)) $count["Numberofcustomerinquiries"] = $activity_res[0]->activity_count;
        
        #find number of customer enquiries 
        $activity_res = DB::select('SELECT count(*) as activity_count from activities, orders where activities.id=orders.activity_id and orders.status="COMPLETED" and  activities.user_id = ? ', [$user_id]);
        if(count($activity_res) > 0 && isset($activity_res[0]->activity_count)) $count["Numberofordersreceived"] = $activity_res[0]->activity_count;

        return $count;
    }#end of findMembershipLevel function 

    /**
     * function which will be called by the user with the user id
     * @param InfusionsoftController $infs
     * @param $user_id
     */
    
    public function user_register($user_id){

        $infs = \App::make(InfusionsoftService::class);
        $this->infs = $infs;
        
        #fetch the user details from database users table 
        $users = DB::select('select * from users where id = ?', [$user_id]);

        #if no user details found then return 
        if(!is_array($users) || count($users) == 0) die("No data found for the user id provided.");
        
        $user_details = $users[0];
        $user_details->email = "sunil@provider.com";

        $user_details = $this->search($user_details);

        #get the mapping of fields based on users type PROVIDER/MEMBER
        $user_details = $this->mapFields($user_details);
        if( count($user_details->infs_mapping) == 0 ) die("User has no valid types for processing:<br>Data found as:<br>".var_export($user_details, true));
        
        #if the contact id is existing then
        if( isset($user_details->INFS_DATA) && is_array($user_details->INFS_DATA) > 0 && isset($user_details->INFS_DATA["Id"]) ){
            echo "<br>Data is already existing.";
            #check if it is a provider, then we need to check before we apply Membership Level tag
            if($user_details->type == "PROVIDER"){

                $existing_tags = [];
                if(isset($user_details->INFS_DATA["Groups"]) && $user_details->INFS_DATA["Groups"] != "")
                    $existing_tags = explode(",", $user_details->INFS_DATA["Groups"]);
                $activity_tags = array_values($user_details->activity_tags);
                foreach($existing_tags as $tag){
                    if(in_array($tag, $activity_tags)){
                        $infs->grpRemove($user_details->INFS_DATA["Id"], $tag);
                        continue;
                    }
                }
                $infs->grpAssign($user_details->INFS_DATA["Id"], $user_details->membership_level_tag);
            }
            $update_status = $infs->updateContact($user_details->INFS_DATA["Id"], $user_details->infs_mapping);
            if($update_status == $user_details->INFS_DATA["Id"]){
                $user_details->contact_update_status = "Contact updated successfully";
            }
        }
        else{#if no data existing , then create the contact 

            $update_status = $infs->updateContact("", $user_details->infs_mapping);
            if($update_status > 0){
                $user_details->contact_update_status = "Contact created successfully with ID: $update_status";
                #assign the tag 
                if($user_details->type == "PROVIDER" && $user_details->membership_level_tag > 0)
                    $infs->grpAssign($update_status, $user_details->membership_level_tag);
            }
        }
        echo "<pre>"; print_r($user_details); echo "</pre>";
    }
    
    /**
    * function to prerpare the variable name mappings with repsect to the member and provider
    **/
    public function mapFields($user_details){
        
        $return = array();
        
        if( !isset($user_details->type) || trim($user_details->type) == "" ){
            return array();
        }

        #fetch data according to the type 
        if($user_details->type == "MEMBER"){
            $users_child = DB::select('select distinct firstname, lastname, dob from people where user_id = ?', [$user_details->id]);
            $i=0;
            foreach($users_child as $child){
                $i++;
                $user_details->{"firstname".$i} = $child->firstname;
                $user_details->{"lastname".$i} = $child->lastname;
                $user_details->{"dob".$i} = DateTime::createFromFormat('Y-m-d H:i:s', $child->dob);
            }
            #find the next most recent activity names for the parent 
            $activity_res = DB::select('SELECT activity_name, selected_objects from orders where status != "COMPLETED" and  user_id = ?', [$user_details->id]);
            
            $today_date = date("Y-m-d H:i:s");
            
            #check table activity_events for most recent date for each booking 
            $active_order = array();
            foreach($activity_res as $order){
                $events_packages = json_decode($order->selected_objects, true);
                $events_packages["events"][]=0;
                $events_packages["packages"][]=0;
                $events_res = DB::select('SELECT event_start from activity_events where status = "ACTIVE" and (id in ('.implode(",", $events_packages["events"]).') or package_id in ('.implode(",", $events_packages["packages"]).') ) and event_start > "'.$today_date.'" order by event_start asc limit 0,1 ');
                
                #check if we have got the event start date, that means we have upcoming event 
                if(count($events_res) > 0){
                    #check if already stored events date is more recent or in fuiture 
                    if(isset($user_details->activity_time) && $user_details->activity_time < $events_res[0]->$events_res) continue;
                    $user_details->activity_name = $order->activity_name;
                    $user_details->activity_time = $events_res[0]->event_start;
                }
            }
            if(isset($user_details->activity_time) && $user_details->activity_time > $today_date){
                $user_details->activity_time = DateTime::createFromFormat('Y-m-d H:i:s', $user_details->activity_time);
            }
        }
        else if($user_details->type == "PROVIDER"){
            $provider_res = DB::select('SELECT `key`,`value` from user_meta where (`key` in ("website")) AND user_id = ?', [$user_details->id]);
            foreach($provider_res as $c_data){
                if($c_data->key == "website"){
                    $user_details->website=$c_data->value;
                }
            }
            #for provider profile page 
            $user_details->business_slug = trim($user_details->business_slug);
            if($user_details->business_slug != "")
                $user_details->provider_profile_page = "http://www.playz.com.au/provider/".$user_details->id."/".$user_details->business_slug."/activities";

            #find the activity status for listing or linkz or workz 
            $activity_res = DB::select('SELECT type from activities where status="ENABLED" and  user_id = ?', [$user_details->id]);
            foreach($provider_res as $c_data){
                if($c_data->key == "website"){
                    $user_details->website=$c_data->value;
                }
            }

            #find the membership level, activity_types_offered, tags, etc.
            $membership_level = $this->findMembershipLevel($user_details->id);
            if(isset($membership_level["membership_level"]) && $membership_level["membership_level"] != "") 
                $user_details->membership_level = $membership_level["membership_level"];
            if(isset($membership_level["activity_types_offered"]) && count($membership_level["activity_types_offered"]) > 0) 
                $user_details->activity_types_offered = implode(",", $membership_level["activity_types_offered"]);

            $user_details->activity_tags = $membership_level["activity_tags"];
            $user_details->membership_level_tag = $membership_level["membership_tag"];

            #find the provider's activity count 
            $counts = $this->findActivityCount($user_details->id);
            $user_details->Numberofpageviews = $counts["Numberofpageviews"];
            $user_details->Numberofcustomerinquiries = $counts["Numberofcustomerinquiries"];
            $user_details->Numberofordersreceived = $counts["Numberofordersreceived"];
            
        }

        $member_field_mapping = config('infusionsoft.'.$user_details->type);
        if( !is_array($member_field_mapping) || count($member_field_mapping) == 0 ) return array();

        foreach( $member_field_mapping as $key => $val ){
            if(isset($user_details->$key)){
                $return[$val] = $user_details->$key;
            }
        }
        $user_details->infs_mapping = $return;
        return $user_details;
    }

    /**
    * function which will be called by the user with the user id and new stage while activity signup 
    */

    public function stage_change(InfusionsoftService $infs, $user_id, $activity_name, $new_status){

        $this->infs = $infs;

        #fetch the user details from database users table 
        $users = DB::select('select * from users where id = ?', [$user_id]);

        #if no user details found then return 
        if(!is_array($users) || count($users) == 0) die("No data found for the user id provided.");

        $user_details = $users[0];
        $user_details->email = "sunil@provider.com";

        $user_details = $this->search($user_details);

        #if the contact id is existing then
        if( isset($user_details->INFS_DATA) && is_array($user_details->INFS_DATA) > 0 && isset($user_details->INFS_DATA["Id"]) ){
            echo "<br>Data is already existing.";
            #check if it is a provider, then we need to check before we apply Membership Level tag
            if($user_details->type == "PROVIDER"){
                $stage_tags = config("infusionsoft.STAGE_TAGS");
                $stage_tags_ids = array_values($stage_tags);
//                $existing_tags = explode(",", $user_details->INFS_DATA["Groups"]);

//                foreach($existing_tags as $tag){
//                    if(in_array($tag, $stage_tags_ids)){
//                        $infs->grpRemove($user_details->INFS_DATA["Id"], $tag);
//                        continue;
//                    }
//                }
                #check if the new stage which has arrived is already defined in the stage_tags array in the config file 
                if(isset($stage_tags["$new_status"])){
                    $infs->grpAssign($user_details->INFS_DATA["Id"], $stage_tags["$new_status"]);
                    #update the provider activity name in infusionsoft 
                    $user_details->INFS_MAP = array("_ProviderActivityName"=>$activity_name);
                    $infs->updateContact($user_details->INFS_DATA["Id"], $user_details->INFS_MAP);
                    $user_details->contact_update_status = "Stage change tag assigned...";
                }
            }
        }
        echo "<pre>"; print_r($user_details); echo "</pre>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
