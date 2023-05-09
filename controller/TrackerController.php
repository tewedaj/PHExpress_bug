<?php
        
    class TrackerController extends ORM{
    
        private   $request;
        private   $response;
    
        function __construct($req,$res){
            $this->request = $req;
            $this->response = $res;
        }
    
        
    public function getTracker(){
        $response =  $this->getTable("Tracker");
        // if(is_object($response)){
            $this->response->send(200,$response);
        // }else {
        //     $this->response->send(400,'{"success": false, "message": "Something Went Wrong"}');
        // }
    }
      
 

        
     
     public function getByid(){
        $response = $this->getTableWhen(" id = '".$this->request["params"]["id"]."' " ,"Tracker");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getBycommand(){
        $response = $this->getTableWhen(" command = '".$this->request["params"]["command"]."' " ,"Tracker");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getBytimeStamp(){
        $response = $this->getTableWhen(" timeStamp = '".$this->request["params"]["timeStamp"]."' " ,"Tracker");
        
            $this->response->send(200,$response);
        
    }
    
     
 

        
        function setTracker(){
             $response = $this->insertInto("Tracker",$this->request["body"]);
           
                $this->response->send(200,$response);
        
        }
     
 

        
        public function updateByid(){
        $response  =   $this->updateWhen(" id = ". $this->request["params"]["id"] ,"Tracker",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateBycommand(){
        $response  =   $this->updateWhen(" command = ". $this->request["params"]["command"] ,"Tracker",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateBytimeStamp(){
        $response  =   $this->updateWhen(" timeStamp = ". $this->request["params"]["timeStamp"] ,"Tracker",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
     
 

        
        public function removeByid(){
            $deleteResult = $this->deleteTable(" id = ". $this->request["params"]["id"] ,"Tracker");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeBycommand(){
            $deleteResult = $this->deleteTable(" command = ". $this->request["params"]["command"] ,"Tracker");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeBytimeStamp(){
            $deleteResult = $this->deleteTable(" timeStamp = ". $this->request["params"]["timeStamp"] ,"Tracker");
                $this->response->send(200, '{"success": true}');
          
        }
    
    
    
    }
        