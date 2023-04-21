<?php
        
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("TestModel2");

        
    $app->get("/TestModel2/", function ($req, $res) {
        $res->send(200, getTable("TestModel2"));
    });
     
 
 
        
    $app->get("/TestModel2/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req->params["id"] ,"TestModel2"));
    });
     
 

        
        