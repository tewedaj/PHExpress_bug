<?php
        
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("TestModel3");

        
    $app->get("/TestModel3/", function ($req, $res) {
        $res->send(200, getTable("TestModel3"));
    });
     
 
 
        
    $app->get("/TestModel3/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req->params["id"] ,"TestModel3"));
    });
     
 

        
        