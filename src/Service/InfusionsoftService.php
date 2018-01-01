<?php

namespace Agencymates\Playz\Service;

use Illuminate\Support\Facades\Config;

class InfusionsoftService
{
    
    public $infs_config = array();
    
    public $token = array();

    public $error_email = "";

    public $app;
    
    protected $infusionsoft_config_path;

    /**
     * Constructor function 
     *
     * 
     */
	public function __construct(){

        #staging asccount
        $this->infusionsoft_config_path = $_SERVER["DOCUMENT_ROOT"]."/james/playz/config/infusionsoft.php";
        #live account
        $this->infusionsoft_config_path = $_SERVER["DOCUMENT_ROOT"]."/config/infusionsoft.php";

        /* Infusionsoft Configuration */
        $this->infs_config = [
            'clientId'=> config('infusionsoft.CLIENT_ID'),
            'clientSecret'=>config('infusionsoft.CLIENT_SECRET'),
            'redirectUri'=>config('infusionsoft.REDIRECT_URI'),
            'code'=>config('infusionsoft.CODE'),
            'debug'=>true
        ];

        /* Infusionsoft Token */
        $this->token = [
            'access_token'=>config('infusionsoft.ACCESS_TOKEN'),
            'expires_in'=>config('infusionsoft.EXPIRES_IN'),
            'token_type'=>config('infusionsoft.TOKEN_TYPE'),
            'refresh_token'=>config('infusionsoft.REFRESH_TOKEN'),
            'scope'=>config('infusionsoft.SCOPE'),
        ];

        /* Error Email */
        $this->error_email = config('infusionsoft.ERROR_EMAIL');
        $this->infusionsoft_connect();

	}#end of constructor 
    

    #function for connecting the to the infusionsoft 
    private function infusionsoft_connect(){
        
        #making an object of INFS 
        $this->app = new \Infusionsoft\Infusionsoft($this->infs_config);

        try{
            #$token_ar = array("access_token"=>$token["accessToken"], "refresh_token"=>$token["refreshToken"], "expires_in"=>$token["endOfLife"]);
            $token_obj = new \Infusionsoft\Token($this->token);

            $this->app->setToken($token_obj);
        }catch(\Infusionsoft\TokenExpiredException $e){ 
            #if token is expired, then refresh the token and update the token data 
            $this->update_token();
        }catch(Exception $e){ 
            if(stripos($e->getMessage(), "Unauthorized") !== FALSE){
                #if token is expired, then refresh the token and update the token data 
                $this->update_token();
            }
        }
    }

    #function to refresh the token 
    public function update_token(){

        #if token is expired, then refresh the token and update the token data 
        $token = (array)$this->app->refreshAccessToken();
//        echo "<pre>New Token : "; print_r($token); echo "</pre>";
        if(isset($token["accessToken"])){
            $token = [
                    'access_token'=>''.$token["accessToken"],
                    'expires_in'=>86400,
                    'token_type'=>'bearer',
                    'refresh_token'=>''.$token["refreshToken"],
                    'scope'=>'read write execute|cq210.infusionsoft.com',
                ];

            $this->token = $token;
            #update configuration variables 
            config(['infusionsoft.ACCESS_TOKEN' => $token["access_token"]]);
            config(['infusionsoft.EXPIRES_IN' => $token["expires_in"]]);
            config(['infusionsoft.TOKEN_TYPE' => $token["token_type"]]);
            config(['infusionsoft.REFRESH_TOKEN' => $token["refresh_token"]]);
            config(['infusionsoft.SCOPE' => $token["scope"]]);
            $all_config = Config::all();
            $infusionsoft = $all_config["infusionsoft"];
            file_put_contents($this->infusionsoft_config_path, "<?php \n return ".var_export($infusionsoft, true).";");
        }
    }
    
    /**
    * This function will check for wordpress id first and then for email address 
    * 
    */
    public function searchContact($field, $value){

        try{
            #fetch infusionsoft object
            $app = $this->app;
            $data_service = $app->data();

            #find using woredpress user id 
            $rets = ["Id", "FirstName", "LastName", "Company", "Groups", "Email", "_WPUserId"];
            $qry = [ $field => $value ];
            
//            echo "<pre>"; print_r($qry); print_r($rets); echo "</pre>";
            $result = $data_service->query("Contact", 1000, 0, $qry, $rets, "Id", TRUE);

            if(is_array($result) && count($result) > 0 ){
                return $result[0];
            }

        }catch(\Infusionsoft\TokenExpiredException $e){ 
            #if token is expired, then refresh the token and update the token data 
            $this->update_token();
            return $this->searchContact($field, $value);
        }catch(\Infusionsoft\Http\HttpException $e){ 
            #if token is expired, then refresh the token and update the token data 
            if(stripos($e->getMessage(), "Unauthorized") !== FALSE){
                $this->update_token();
                return $this->searchContact($field, $value);
            }
        }catch(Exception $e){ 
            if(stripos($e->getMessage(), "Unauthorized") !== FALSE){
                #if token is expired, then refresh the token and update the token data 
                $this->update_token();
                return $this->searchContact($field, $value);
            }
        }
        return array();
    }

    /**
     * function for updating the contact 
     *
     */
    public function updateContact($contactID, $infs_ar){

        try{
            #fetch infusionsoft object
            $app = $this->app;
            $data_service = $app->data();
            $con_service = $app->contacts('xml');
            if($contactID > 0){
                $contactID = $con_service->update((int)$contactID, $infs_ar);
            }
            else if($contactID == ""){
                $contactID = $con_service->add($infs_ar);
            }

            if( $contactID > 0 && isset($infs_ar["Email"]) ){
                $service_obj = $this->app->emails();
                $service_obj->optIn($infs_ar["Email"], "Opt In as Requested from Playz");
            }

        }catch(\Infusionsoft\TokenExpiredException $e){ 
            #if token is expired, then refresh the token and update the token data 
            $this->update_token();
            return $this->updateContact($contactID, $infs_ar);
        }catch(\Infusionsoft\Http\HttpException $e){ 
            #if token is expired, then refresh the token and update the token data 
            if(stripos($e->getMessage(), "Unauthorized") !== FALSE){
                $this->update_token();
                return $this->updateContact($contactID, $infs_ar);
            }
        }catch(Exception $e){ 
            if(stripos($e->getMessage(), "Unauthorized") !== FALSE){
                #if token is expired, then refresh the token and update the token data 
                $this->update_token();
                return $this->updateContact($contactID, $infs_ar);
            }
        }
        return $contactID;
    }

    #Apply the tag to the client 
    public function grpAssign($client_id, $smart_waiver_tag){
        $app=$this->app;
        try{
            $con_service = $app->contacts('xml');
            $result = $con_service->addToGroup($client_id, $smart_waiver_tag);
        }catch(\Infusionsoft\TokenExpiredException $e){ 
            #var_dump($e);
            #if token is expired, then refresh the token and update the token data 
            $this->update_token();
            $this->grpAssign($client_id, $smart_waiver_tag);
        }catch(Exception $e){ 
            if(stripos($e->getMessage(), "An HTTP error occurred: Unauthorized") !== FALSE){
                #if token is expired, then refresh the token and update the token data 
                $this->update_token();
                $this->grpAssign($client_id, $smart_waiver_tag);
            }
        }
    }

    #Apply the tag to the client 
    public function grpRemove($client_id, $smart_waiver_tag){
        $app=$this->app;
        try{
            $con_service = $app->contacts('xml');
            $result = $con_service->removeFromGroup($client_id, $smart_waiver_tag);
        }catch(\Infusionsoft\TokenExpiredException $e){ 
            #var_dump($e);
            #if token is expired, then refresh the token and update the token data 
            $this->update_token();
            $this->grpRemove($client_id, $smart_waiver_tag);
        }catch(Exception $e){ 
            if(stripos($e->getMessage(), "An HTTP error occurred: Unauthorized") !== FALSE){
                #if token is expired, then refresh the token and update the token data 
                $this->update_token();
                $this->grpRemove($client_id, $smart_waiver_tag);
            }
        }
    }

}
