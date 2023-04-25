<?php
        
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("User");

        
    $app->get("/", function ($req, $res) {
        $res->send(200, getTable("User"));
    });
     
 
 
        
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"User"));
    });
     
 

        
    
    $app->get("/get_By_id/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = '".$req["params"]["id"]."' " ,"User"));
    });

    
    
    $app->get("/get_By_user_name/:username", function ($req, $res) {
        $res->send(200, getTableWhen(" user_name = '".$req["params"]["username"]."' " ,"User"));
    });

    
    
    $app->get("/getBypassword/:password", function ($req, $res) {
        $res->send(200, getTableWhen(" pass_word = '".$req["params"]["password"]."' " ,"User"));
    });

     
 

        
     
        $app->post("/",function ($req, $res){
            $res->send(200,insertInto("User",$req["body"]));
        });
     
 

        
    
    $app->patch("/getByid/:id", function ($req, $res) {
        updateWhen(" id = ". $req["params"]["id"] ,"User",$req["body"]);
    });

    
    
    $app->patch("/getByusername/:username", function ($req, $res) {
        updateWhen(" user_name = ". $req["params"]["username"] ,"User",$req["body"]);
    });

    
    
    $app->patch("/getBypassword/:password", function ($req, $res) {
        updateWhen(" pass_word = ". $req["params"]["password"] ,"User",$req["body"]);
    });

     
 

        
    
    $app->delete("/getByid/:id", function ($req, $res) {
        $deleteResult = deleteTable(" id = ". $req["params"]["id"] ,"User");
        if($deleteResult["Success"]){
            $res->send(200, '{"success": true}');
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/getByusername/:username", function ($req, $res) {
        $deleteResult = deleteTable(" user_name = ". $req["params"]["username"] ,"User");
        if($deleteResult["Success"]){
            $res->send(200, '{"success": true}');
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/getBypassword/:password", function ($req, $res) {
        $deleteResult = deleteTable(" pass_word = ". $req["params"]["password"] ,"User");
        if($deleteResult["Success"]){
            $res->send(200, '{"success": true}');
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    

        