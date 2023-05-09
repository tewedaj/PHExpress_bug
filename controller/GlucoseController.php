<?php
        
    class GlucoseController extends ORM{
    
        private   $request;
        private   $response;
    
        function __construct($req,$res){
            $this->request = $req;
            $this->response = $res;
        }
    
        
    public function getGlucose(){
        $response =  $this->getTable("Glucose");
        // if(is_object($response)){
            $this->response->send(200,$response);
        // }else {
        //     $this->response->send(400,'{"success": false, "message": "Something Went Wrong"}');
        // }
    }
      
 

        
     
     public function getByid(){
        $response = $this->getTableWhen(" id = '".$this->request["params"]["id"]."' " ,"Glucose");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getByuserid(){
        $response = $this->getTableWhen(" user_id = '".$this->request["params"]["userid"]."' " ,"Glucose");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getBymgdl(){
        $response = $this->getTableWhen(" mg_dl = '".$this->request["params"]["mgdl"]."' " ,"Glucose");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getBycarb(){
        $response = $this->getTableWhen(" carb = '".$this->request["params"]["carb"]."' " ,"Glucose");
        
            $this->response->send(200,$response);
        
    }
    
    
     
     public function getByinsuline(){
        $response = $this->getTableWhen(" insuline = '".$this->request["params"]["insuline"]."' " ,"Glucose");
        
            $this->response->send(200,$response);
        
    }
    
     
 

        
        function setGlucose(){
             $response = $this->insertInto("Glucose",$this->request["body"]);
           
                $this->response->send(200,$response);
        
        }
     
 

        
        public function updateByid(){
        $response  =   $this->updateWhen(" id = ". $this->request["params"]["id"] ,"Glucose",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateByuserid(){
        $response  =   $this->updateWhen(" user_id = ". $this->request["params"]["userid"] ,"Glucose",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateBymgdl(){
        $response  =   $this->updateWhen(" mg_dl = ". $this->request["params"]["mgdl"] ,"Glucose",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateBycarb(){
        $response  =   $this->updateWhen(" carb = ". $this->request["params"]["carb"] ,"Glucose",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
    
        public function updateByinsuline(){
        $response  =   $this->updateWhen(" insuline = ". $this->request["params"]["insuline"] ,"Glucose",$this->request["body"]);
           
                $this->response->send(200,'{"Success": true , "Message": "Successfully Updated"}');
           
        }
     
 

        
        public function removeByid(){
            $deleteResult = $this->deleteTable(" id = ". $this->request["params"]["id"] ,"Glucose");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeByuserid(){
            $deleteResult = $this->deleteTable(" user_id = ". $this->request["params"]["userid"] ,"Glucose");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeBymgdl(){
            $deleteResult = $this->deleteTable(" mg_dl = ". $this->request["params"]["mgdl"] ,"Glucose");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeBycarb(){
            $deleteResult = $this->deleteTable(" carb = ". $this->request["params"]["carb"] ,"Glucose");
                $this->response->send(200, '{"success": true}');
          
        }
    
        public function removeByinsuline(){
            $deleteResult = $this->deleteTable(" insuline = ". $this->request["params"]["insuline"] ,"Glucose");
                $this->response->send(200, '{"success": true}');
          
        }
    
    
    
    }
        