<?php
        
    class DevController extends ORM{
    
        private   $request;
        private   $response;
    
        function __construct($req,$res){
            $this->request = $req;
            $this->response = $res;
        }
    
        
    public function getDev(){
        $response =  $this->getTable("Dev");
        // if(is_object($response)){
            $this->response->send(200,$response);
        // }else {
        //     $this->response->send(400,'{"success": false, "message": "Something Went Wrong"}');
        // }
    }
      
 

        
     
     public function getByid(){
        $response = $this->getTableWhen(" id = '".$this->request["params"]["id"]."' " ,"Dev");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getByusername(){
        $response = $this->getTableWhen(" user_name = '".$this->request["params"]["username"]."' " ,"Dev");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getBypassword(){
        $response = $this->getTableWhen(" pass_word = '".$this->request["params"]["password"]."' " ,"Dev");
        
            $this->response->send(200,$response);
        
    }
    
     
 

        
        function setDev(){
             $response = $this->insertInto("Dev",$this->request["body"]);
           
                $this->response->send(200,$response);
        
        }
     
 

        
        public function updateByid(){
        $response  =   $this->updateWhen(" id = ". $this->request["params"]["id"] ,"Dev",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateByusername(){
        $response  =   $this->updateWhen(" user_name = ". $this->request["params"]["username"] ,"Dev",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateBypassword(){
        $response  =   $this->updateWhen(" pass_word = ". $this->request["params"]["password"] ,"Dev",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
     
 

        
        public function removeByid(){
            $deleteResult = $this->deleteTable(" id = ". $this->request["params"]["id"] ,"Dev");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeByusername(){
            $deleteResult = $this->deleteTable(" user_name = ". $this->request["params"]["username"] ,"Dev");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeBypassword(){
            $deleteResult = $this->deleteTable(" pass_word = ". $this->request["params"]["password"] ,"Dev");
                $this->response->send(200, '{"success": true}');
          
        }
    
    
    
    }
        