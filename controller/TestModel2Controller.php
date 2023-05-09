<?php
        
    class TestModel2Controller extends ORM{
    
        private   $request;
        private   $response;
    
        function __construct($req,$res){
            $this->request = $req;
            $this->response = $res;
        }
    
        
    public function getTestModel2(){
        $response =  $this->getTable("TestModel2");
        // if(is_object($response)){
            $this->response->send(200,$response);
        // }else {
        //     $this->response->send(400,'{"success": false, "message": "Something Went Wrong"}');
        // }
    }
      
 

        
     
     public function getByid(){
        $response = $this->getTableWhen(" id = '".$this->request["params"]["id"]."' " ,"TestModel2");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getByusername(){
        $response = $this->getTableWhen(" user_name = '".$this->request["params"]["username"]."' " ,"TestModel2");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getBypassword(){
        $response = $this->getTableWhen(" pass_word = '".$this->request["params"]["password"]."' " ,"TestModel2");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getByuserid(){
        $response = $this->getTableWhen(" user_id = '".$this->request["params"]["userid"]."' " ,"TestModel2");
        
            $this->response->send(200,$response);
        
    }
    
     
 

        
        function setTestModel2(){
             $response = $this->insertInto("TestModel2",$this->request["body"]);
           
                $this->response->send(200,$response);
        
        }
     
 

        
        public function updateByid(){
        $response  =   $this->updateWhen(" id = ". $this->request["params"]["id"] ,"TestModel2",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateByusername(){
        $response  =   $this->updateWhen(" user_name = ". $this->request["params"]["username"] ,"TestModel2",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateBypassword(){
        $response  =   $this->updateWhen(" pass_word = ". $this->request["params"]["password"] ,"TestModel2",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateByuserid(){
        $response  =   $this->updateWhen(" user_id = ". $this->request["params"]["userid"] ,"TestModel2",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
     
 

        
        public function removeByid(){
            $deleteResult = $this->deleteTable(" id = ". $this->request["params"]["id"] ,"TestModel2");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeByusername(){
            $deleteResult = $this->deleteTable(" user_name = ". $this->request["params"]["username"] ,"TestModel2");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeBypassword(){
            $deleteResult = $this->deleteTable(" pass_word = ". $this->request["params"]["password"] ,"TestModel2");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeByuserid(){
            $deleteResult = $this->deleteTable(" user_id = ". $this->request["params"]["userid"] ,"TestModel2");
                $this->response->send(200, '{"success": true}');
          
        }
    
    
    
    }
        