<?php
        
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("Teacher");

        
    $app->get("/", function ($req, $res) {
        $res->send(200, getTable("Teacher"));
    });
     
 
 
        
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Teacher"));
    });
     
 

        
    
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Teacher"));
    });

    
    
    $app->get("/:name", function ($req, $res) {
        $res->send(200, getTableWhen(" name = ". $req["params"]["name"] ,"Teacher"));
    });

    
    
    $app->get("/:age", function ($req, $res) {
        $res->send(200, getTableWhen(" age = ". $req["params"]["age"] ,"Teacher"));
    });

    
    
    $app->get("/:sex", function ($req, $res) {
        $res->send(200, getTableWhen(" sex = ". $req["params"]["sex"] ,"Teacher"));
    });

     
 

        
     
        $app->post("/",function ($req, $res){
            $res->send(200,insertInto("Teacher",$req["body"]));
        });
     
 

        
    
    $app->patch("/:id", function ($req, $res) {
        updateWhen(" id = ". $req["params"]["id"] ,"Teacher",$req["body"]);
    });

    
    
    $app->patch("/:name", function ($req, $res) {
        updateWhen(" name = ". $req["params"]["name"] ,"Teacher",$req["body"]);
    });

    
    
    $app->patch("/:age", function ($req, $res) {
        updateWhen(" age = ". $req["params"]["age"] ,"Teacher",$req["body"]);
    });

    
    
    $app->patch("/:sex", function ($req, $res) {
        updateWhen(" sex = ". $req["params"]["sex"] ,"Teacher",$req["body"]);
    });

     
 

        
    
    $app->delete("/:id", function ($req, $res) {
        $deleteResult = deleteTable(" id = ". $req["params"]["id"] ,"Teacher");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Teacher"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:name", function ($req, $res) {
        $deleteResult = deleteTable(" name = ". $req["params"]["name"] ,"Teacher");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" name = ". $req["params"]["name"] ,"Teacher"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:age", function ($req, $res) {
        $deleteResult = deleteTable(" age = ". $req["params"]["age"] ,"Teacher");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" age = ". $req["params"]["age"] ,"Teacher"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:sex", function ($req, $res) {
        $deleteResult = deleteTable(" sex = ". $req["params"]["sex"] ,"Teacher");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" sex = ". $req["params"]["sex"] ,"Teacher"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    

        