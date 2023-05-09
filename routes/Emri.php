<?php
    include "./controller/EmriController.php";
    //auto generated file 
 
    
    $app = new phexpress();
    $app->setParent("Emri");

    
    $app->get("/", function ($req, $res) {
        $EmriController = new EmriController($req, $res);   
        $EmriController->getEmri();
    });
     
 
 
    
    
    $app->get("/getByid/:id", function ($req, $res) {
        $EmriController = new EmriController($req, $res);   
        $EmriController->getByid();
    });

    
    
    $app->get("/getByusername/:username", function ($req, $res) {
        $EmriController = new EmriController($req, $res);   
        $EmriController->getByusername();
    });

    
    
    $app->get("/getBypassword/:password", function ($req, $res) {
        $EmriController = new EmriController($req, $res);   
        $EmriController->getBypassword();
    });

     
 

    
     
        $app->post("/",function ($req, $res){
            $EmriController = new EmriController($req, $res);   
            $EmriController->setEmri();
        });
     
 

    
    
    $app->patch("/updateByid/:id", function ($req, $res) {
        $EmriController = new EmriController($req, $res);   
        $EmriController->updateByid();
    });

    
    
    $app->patch("/updateByusername/:username", function ($req, $res) {
        $EmriController = new EmriController($req, $res);   
        $EmriController->updateByusername();
    });

    
    
    $app->patch("/updateBypassword/:password", function ($req, $res) {
        $EmriController = new EmriController($req, $res);   
        $EmriController->updateBypassword();
    });

     
 

    
    
    $app->delete("/deleteByid/:id", function ($req, $res) {
        $EmriController = new EmriController($req, $res);   
        $EmriController->removeByid();
    });

    
 

    
    
    $app->delete("/deleteByusername/:username", function ($req, $res) {
        $EmriController = new EmriController($req, $res);   
        $EmriController->removeByusername();
    });

    
 

    
    
    $app->delete("/deleteBypassword/:password", function ($req, $res) {
        $EmriController = new EmriController($req, $res);   
        $EmriController->removeBypassword();
    });

    
 

    

    