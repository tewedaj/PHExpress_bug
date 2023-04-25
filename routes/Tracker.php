<?php
        
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("Tracker");

        
    $app->get("/", function ($req, $res) {
        $res->send(200, getTable("Tracker"));
    });
     
 
 
        
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Tracker"));
    });
     
 

        
    
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Tracker"));
    });

    
    
    $app->get("/:command", function ($req, $res) {
        $res->send(200, getTableWhen(" command = ". $req["params"]["command"] ,"Tracker"));
    });

    
    
    $app->get("/:timeStamp", function ($req, $res) {
        $res->send(200, getTableWhen(" timeStamp = ". $req["params"]["timeStamp"] ,"Tracker"));
    });

     
 

        
     
        $app->post("/",function ($req, $res){
            $res->send(200,insertInto("Tracker",$req["body"]));
        });
     
 

        
    
    $app->patch("/:id", function ($req, $res) {
        updateWhen(" id = ". $req["params"]["id"] ,"Tracker",$req["body"]);
    });

    
    
    $app->patch("/:command", function ($req, $res) {
        updateWhen(" command = ". $req["params"]["command"] ,"Tracker",$req["body"]);
    });

    
    
    $app->patch("/:timeStamp", function ($req, $res) {
        updateWhen(" timeStamp = ". $req["params"]["timeStamp"] ,"Tracker",$req["body"]);
    });

     
 

        
    
    $app->delete("/:id", function ($req, $res) {
        $deleteResult = deleteTable(" id = ". $req["params"]["id"] ,"Tracker");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Tracker"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:command", function ($req, $res) {
        $deleteResult = deleteTable(" command = ". $req["params"]["command"] ,"Tracker");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" command = ". $req["params"]["command"] ,"Tracker"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:timeStamp", function ($req, $res) {
        $deleteResult = deleteTable(" timeStamp = ". $req["params"]["timeStamp"] ,"Tracker");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" timeStamp = ". $req["params"]["timeStamp"] ,"Tracker"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    

        