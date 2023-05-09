<?php
    include "./controller/DevController.php";
    //auto generated file 
 
    
    $app = new phexpress();
    $app->setParent("Dev");

    
    $app->get("/", function ($req, $res) {
        $DevController = new DevController($req, $res);   
        $DevController->getDev();
    });
     
 
 
    
    
    $app->get("/getByid/:id", function ($req, $res) {
        $DevController = new DevController($req, $res);   
        $DevController->getByid();
    });

    
    
    $app->get("/getByusername/:username", function ($req, $res) {
        $DevController = new DevController($req, $res);   
        $DevController->getByusername();
    });

    
    
    $app->get("/getBypassword/:password", function ($req, $res) {
        $DevController = new DevController($req, $res);   
        $DevController->getBypassword();
    });

     
 

    
     
        $app->post("/",function ($req, $res){
            $DevController = new DevController($req, $res);   
            $DevController->setDev();
        });
     
 

    
    
    $app->patch("/updateByid/:id", function ($req, $res) {
        $DevController = new DevController($req, $res);   
        $DevController->updateByid();
    });

    
    
    $app->patch("/updateByusername/:username", function ($req, $res) {
        $DevController = new DevController($req, $res);   
        $DevController->updateByusername();
    });

    
    
    $app->patch("/updateBypassword/:password", function ($req, $res) {
        $DevController = new DevController($req, $res);   
        $DevController->updateBypassword();
    });

     
 

    
    
    $app->delete("/deleteByid/:id", function ($req, $res) {
        $DevController = new DevController($req, $res);   
        $DevController->removeByid();
    });

    
 

    
    
    $app->delete("/deleteByusername/:username", function ($req, $res) {
        $DevController = new DevController($req, $res);   
        $DevController->removeByusername();
    });

    
 

    
    
    $app->delete("/deleteBypassword/:password", function ($req, $res) {
        $DevController = new DevController($req, $res);   
        $DevController->removeBypassword();
    });

    
 

    

    