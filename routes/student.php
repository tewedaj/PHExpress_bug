<?php
        
        //auto generated file 
 
        
        
    $app->get("/Student/", function ($req, $res) {
        $res->send(200, getTable("Student"));
    });
     
 
 
        
    $app->get("/Student/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req->params["id"] ,"Student"));
    });
     
 

        
        