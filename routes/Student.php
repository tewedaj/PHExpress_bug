<?php
        
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("Student");

        
    $app->get("/", function ($req, $res) {
        $res->send(200, getTable("Student"));
    });
     
 
 
        
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Student"));
    });
     
 

        
    
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Student"));
    });

    
    
    $app->get("/:user_name", function ($req, $res) {
        $res->send(200, getTableWhen(" user_name = ". $req["params"]["user_name"] ,"Student"));
    });

    
    
    $app->get("/:pass_word", function ($req, $res) {
        $res->send(200, getTableWhen(" pass_word = ". $req["params"]["pass_word"] ,"Student"));
    });

     
 

        
     
        $app->post("/",function ($req, $res){
            $res->send(200,insertInto("Student",$req["body"]));
        });
     
 

        
    
    $app->patch("/:id", function ($req, $res) {
        updateWhen(" id = ". $req["params"]["id"] ,"Student",$req["body"]);
    });

    
    
    $app->patch("/:user_name", function ($req, $res) {
        updateWhen(" user_name = ". $req["params"]["user_name"] ,"Student",$req["body"]);
    });

    
    
    $app->patch("/:pass_word", function ($req, $res) {
        updateWhen(" pass_word = ". $req["params"]["pass_word"] ,"Student",$req["body"]);
    });

     
 

        
    
    $app->delete("/:id", function ($req, $res) {
        $deleteResult = deleteTable(" id = ". $req["params"]["id"] ,"Student");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Student"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:user_name", function ($req, $res) {
        $deleteResult = deleteTable(" user_name = ". $req["params"]["user_name"] ,"Student");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" user_name = ". $req["params"]["user_name"] ,"Student"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:pass_word", function ($req, $res) {
        $deleteResult = deleteTable(" pass_word = ". $req["params"]["pass_word"] ,"Student");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" pass_word = ". $req["params"]["pass_word"] ,"Student"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    

        