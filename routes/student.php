<?php
        
        //auto generated file 
 
    $app = new phexpress();
    $app->setParent("student");
        
        
    $app->get("/Student/", function ($req, $res) {
        $res->send(200, getTable("Student"));
    });
     
    $app->post("/add", function($req,$res){

    });
 
 
        
    $app->get("/Student/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req->params["id"] ,"Student"));
    });
     
 

        
        