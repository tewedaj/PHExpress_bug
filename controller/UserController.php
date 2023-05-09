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
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getByusername(){
        $response = $this->getTableWhen(" user_name = '".$this->request["params"]["username"]."' " ,"User");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getBypassword(){
        $response = $this->getTableWhen(" pass_word = '".$this->request["params"]["password"]."' " ,"User");
        
            $this->response->send(200,$response);
        
    }
    
     
 

        
        function setUser(){
             $response = $this->insertInto("User",$this->request["body"]);
           
                $this->response->send(200,$response);
        
        }
     
 

        
        public function updateByid(){
        $response  =   $this->updateWhen(" id = ". $this->request["params"]["id"] ,"User",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateByusername(){
        $response  =   $this->updateWhen(" user_name = ". $this->request["params"]["username"] ,"User",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateBypassword(){
        $response  =   $this->updateWhen(" pass_word = ". $this->request["params"]["password"] ,"User",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
     
 

        
        public function removeByid(){
            $deleteResult = $this->deleteTable(" id = ". $this->request["params"]["id"] ,"User");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeByusername(){
            $deleteResult = $this->deleteTable(" user_name = ". $this->request["params"]["username"] ,"User");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeBypassword(){
            $deleteResult = $this->deleteTable(" pass_word = ". $this->request["params"]["password"] ,"User");
                $this->response->send(200, '{"success": true}');
          
        }
    
    
    
    }
        