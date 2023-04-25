<?php
        
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("TestModel2");

        
    $app->get("/", function ($req, $res) {
        $res->send(200, getTable("TestModel2"));
    });
     
 
 
        
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"TestModel2"));
    });
     
 

        
    
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"TestModel2"));
    });

    
    
    $app->get("/:user_name", function ($req, $res) {
        $res->send(200, getTableWhen(" user_name = ". $req["params"]["user_name"] ,"TestModel2"));
    });

    
    
    $app->get("/:pass_word", function ($req, $res) {
        $res->send(200, getTableWhen(" pass_word = ". $req["params"]["pass_word"] ,"TestModel2"));
    });

    
    
    $app->get("/:user_id", function ($req, $res) {
        $res->send(200, getTableWhen(" user_id = ". $req["params"]["user_id"] ,"TestModel2"));
    });

     
 

        
     
        $app->post("/",function ($req, $res){
            $res->send(200,insertInto("TestModel2",$req["body"]));
        });
     
 

        
    
    $app->patch("/:id", function ($req, $res) {
        updateWhen(" id = ". $req["params"]["id"] ,"TestModel2",$req["body"]);
    });

    
    
    $app->patch("/:user_name", function ($req, $res) {
        updateWhen(" user_name = ". $req["params"]["user_name"] ,"TestModel2",$req["body"]);
    });

    
    
    $app->patch("/:pass_word", function ($req, $res) {
        updateWhen(" pass_word = ". $req["params"]["pass_word"] ,"TestModel2",$req["body"]);
    });

    
    
    $app->patch("/:user_id", function ($req, $res) {
        updateWhen(" user_id = ". $req["params"]["user_id"] ,"TestModel2",$req["body"]);
    });

     
 

        
    
    $app->delete("/:id", function ($req, $res) {
        $deleteResult = deleteTable(" id = ". $req["params"]["id"] ,"TestModel2");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"TestModel2"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:user_name", function ($req, $res) {
        $deleteResult = deleteTable(" user_name = ". $req["params"]["user_name"] ,"TestModel2");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" user_name = ". $req["params"]["user_name"] ,"TestModel2"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:pass_word", function ($req, $res) {
        $deleteResult = deleteTable(" pass_word = ". $req["params"]["pass_word"] ,"TestModel2");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" pass_word = ". $req["params"]["pass_word"] ,"TestModel2"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:user_id", function ($req, $res) {
        $deleteResult = deleteTable(" user_id = ". $req["params"]["user_id"] ,"TestModel2");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" user_id = ". $req["params"]["user_id"] ,"TestModel2"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    

        