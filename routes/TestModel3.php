<?php
        
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("TestModel3");

        
    $app->get("/", function ($req, $res) {
        $res->send(200, getTable("TestModel3"));
    });
     
 
 
        
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"TestModel3"));
    });
     
 

        
    
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"TestModel3"));
    });

    
    
    $app->get("/:user_name", function ($req, $res) {
        $res->send(200, getTableWhen(" user_name = ". $req["params"]["user_name"] ,"TestModel3"));
    });

    
    
    $app->get("/:pass_word", function ($req, $res) {
        $res->send(200, getTableWhen(" pass_word = ". $req["params"]["pass_word"] ,"TestModel3"));
    });

    
    
    $app->get("/:user_id", function ($req, $res) {
        $res->send(200, getTableWhen(" user_id = ". $req["params"]["user_id"] ,"TestModel3"));
    });

     
 

        
     
        $app->post("/",function ($req, $res){
            $res->send(200,insertInto("TestModel3",$req["body"]));
        });
     
 

        
    
    $app->patch("/:id", function ($req, $res) {
        updateWhen(" id = ". $req["params"]["id"] ,"TestModel3",$req["body"]);
    });

    
    
    $app->patch("/:user_name", function ($req, $res) {
        updateWhen(" user_name = ". $req["params"]["user_name"] ,"TestModel3",$req["body"]);
    });

    
    
    $app->patch("/:pass_word", function ($req, $res) {
        updateWhen(" pass_word = ". $req["params"]["pass_word"] ,"TestModel3",$req["body"]);
    });

    
    
    $app->patch("/:user_id", function ($req, $res) {
        updateWhen(" user_id = ". $req["params"]["user_id"] ,"TestModel3",$req["body"]);
    });

     
 

        
    
    $app->delete("/:id", function ($req, $res) {
        $deleteResult = deleteTable(" id = ". $req["params"]["id"] ,"TestModel3");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"TestModel3"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:user_name", function ($req, $res) {
        $deleteResult = deleteTable(" user_name = ". $req["params"]["user_name"] ,"TestModel3");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" user_name = ". $req["params"]["user_name"] ,"TestModel3"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:pass_word", function ($req, $res) {
        $deleteResult = deleteTable(" pass_word = ". $req["params"]["pass_word"] ,"TestModel3");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" pass_word = ". $req["params"]["pass_word"] ,"TestModel3"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:user_id", function ($req, $res) {
        $deleteResult = deleteTable(" user_id = ". $req["params"]["user_id"] ,"TestModel3");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" user_id = ". $req["params"]["user_id"] ,"TestModel3"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    

        