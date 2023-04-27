<?php
        
    class UserController extends ORM{
    
        private   $request;
        private   $response;
    
        function __construct($req,$res){
            $this->request = $req;
            $this->response = $res;
        }
    
        
    public function getUser(){
        $response =  $this->getTable("User");
        // if(is_object($response)){
            $this->response->send(200,$response);
        // }else {
        //     $this->response->send(400,'{"success": false, "message": "Something Went Wrong"}');
        // }
    }
      
 

        
     
     public function getByid(){
        $response = $this->getTableWhen(" id = '".$this->request["params"]["id"]."' " ,"User");
        // if(is_object($response)){
            $this->response->send(200,$response);
        // }else {
        //     $this->response->send(400,'{"success": false, "message": "Something Went Wrong"}');
        // }
    }
    
    
     
     public function getByusername(){
        $response = $this->getTableWhen(" user_name = '".$this->request["params"]["username"]."' " ,"User");
        // if(is_object($response)){
            $this->response->send(200,$response);
        // }else {
        //     $this->response->send(400,'{"success": false, "message": "Something Went Wrong"}');
        // }
    }
    
    
     
     public function getBypassword(){
        $response = $this->getTableWhen(" pass_word = '".$this->request["params"]["password"]."' " ,"User");
        // if(is_object($response)){
            $this->response->send(200,$response);
        // }else {
        //     $this->response->send(400,'{"success": false, "message": "Something Went Wrong"}');
        // }
    }
    
     
 

        
        function setUser(){
             $response = $this->insertInto("User",$this->request["body"]);
            if($response["Success"]){
                $this->response->send(200,$response);
            }else{
                $this->response->send(500,'{"Success": false , "Message": " Something Went Wrong"}');
            }
        }
     
 

        
        public function updateByid(){
        $response  =   $this->updateWhen(" id = ". $this->request["params"]["id"] ,"User",$this->request["body"]);
            if($response["Success"]){
                $this->response->app(200,'{"Success": true , "Message": "Successfully Added"}');
            }else{
                $this->response->app(500,'{"Success": false , "Message":"Something Went Wrong"}');
            }
        }
    
        public function updateByusername(){
        $response  =   $this->updateWhen(" user_name = ". $this->request["params"]["username"] ,"User",$this->request["body"]);
            if($response["Success"]){
                $this->response->app(200,'{"Success": true , "Message": "Successfully Added"}');
            }else{
                $this->response->app(500,'{"Success": false , "Message":"Something Went Wrong"}');
            }
        }
    
        public function updateBypassword(){
        $response  =   $this->updateWhen(" pass_word = ". $this->request["params"]["password"] ,"User",$this->request["body"]);
            if($response["Success"]){
                $this->response->app(200,'{"Success": true , "Message": "Successfully Added"}');
            }else{
                $this->response->app(500,'{"Success": false , "Message":"Something Went Wrong"}');
            }
        }
     
 

        
        public function removeByid(){
            $deleteResult = $this->deleteTable(" id = ". $this->request["params"]["id"] ,"User");
            if($deleteResult["Success"]){
                $this->response->send(200, '{"success": true}');
            }else{
                $this->response->send(400, '{"err": $deleteResult["Message"]}');
            }
        }
    
        public function removeByusername(){
            $deleteResult = $this->deleteTable(" user_name = ". $this->request["params"]["username"] ,"User");
            if($deleteResult["Success"]){
                $this->response->send(200, '{"success": true}');
            }else{
                $this->response->send(400, '{"err": $deleteResult["Message"]}');
            }
        }
    
        public function removeBypassword(){
            $deleteResult = $this->deleteTable(" pass_word = ". $this->request["params"]["password"] ,"User");
            if($deleteResult["Success"]){
                $this->response->send(200, '{"success": true}');
            }else{
                $this->response->send(400, '{"err": $deleteResult["Message"]}');
            }
        }
    
    
    
    }
        