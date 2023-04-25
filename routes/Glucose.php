<?php
        
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("Glucose");

        
    $app->get("/", function ($req, $res) {
        $res->send(200, getTable("Glucose"));
    });
     
 
 
        
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Glucose"));
    });
     
 

        
    
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Glucose"));
    });

    
    
    $app->get("/:user_id", function ($req, $res) {
        $res->send(200, getTableWhen(" user_id = ". $req["params"]["user_id"] ,"Glucose"));
    });

    
    
    $app->get("/:mg_dl", function ($req, $res) {
        $res->send(200, getTableWhen(" mg_dl = ". $req["params"]["mg_dl"] ,"Glucose"));
    });

    
    
    $app->get("/:carb", function ($req, $res) {
        $res->send(200, getTableWhen(" carb = ". $req["params"]["carb"] ,"Glucose"));
    });

    
    
    $app->get("/:insuline", function ($req, $res) {
        $res->send(200, getTableWhen(" insuline = ". $req["params"]["insuline"] ,"Glucose"));
    });

     
 

        
     
        $app->post("/",function ($req, $res){
            $res->send(200,insertInto("Glucose",$req["body"]));
        });
     
 

        
    
    $app->patch("/:id", function ($req, $res) {
        updateWhen(" id = ". $req["params"]["id"] ,"Glucose",$req["body"]);
    });

    
    
    $app->patch("/:user_id", function ($req, $res) {
        updateWhen(" user_id = ". $req["params"]["user_id"] ,"Glucose",$req["body"]);
    });

    
    
    $app->patch("/:mg_dl", function ($req, $res) {
        updateWhen(" mg_dl = ". $req["params"]["mg_dl"] ,"Glucose",$req["body"]);
    });

    
    
    $app->patch("/:carb", function ($req, $res) {
        updateWhen(" carb = ". $req["params"]["carb"] ,"Glucose",$req["body"]);
    });

    
    
    $app->patch("/:insuline", function ($req, $res) {
        updateWhen(" insuline = ". $req["params"]["insuline"] ,"Glucose",$req["body"]);
    });

     
 

        
    
    $app->delete("/:id", function ($req, $res) {
        $deleteResult = deleteTable(" id = ". $req["params"]["id"] ,"Glucose");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" id = ". $req["params"]["id"] ,"Glucose"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:user_id", function ($req, $res) {
        $deleteResult = deleteTable(" user_id = ". $req["params"]["user_id"] ,"Glucose");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" user_id = ". $req["params"]["user_id"] ,"Glucose"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:mg_dl", function ($req, $res) {
        $deleteResult = deleteTable(" mg_dl = ". $req["params"]["mg_dl"] ,"Glucose");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" mg_dl = ". $req["params"]["mg_dl"] ,"Glucose"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:carb", function ($req, $res) {
        $deleteResult = deleteTable(" carb = ". $req["params"]["carb"] ,"Glucose");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" carb = ". $req["params"]["carb"] ,"Glucose"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    
    
    $app->delete("/:insuline", function ($req, $res) {
        $deleteResult = deleteTable(" insuline = ". $req["params"]["insuline"] ,"Glucose");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" insuline = ". $req["params"]["insuline"] ,"Glucose"));
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    
 

    

        