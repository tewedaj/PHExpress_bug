<?php
    include "./controller/TrackerController.php";
    //auto generated file 
 
    
    $app = new phexpress();
    $app->setParent("Tracker");

    
    $app->get("/", function ($req, $res) {
        $TrackerController = new TrackerController($req, $res);   
        $TrackerController->getTracker();
    });
     
 
 
    
    
    $app->get("/getByid/:id", function ($req, $res) {
        $TrackerController = new TrackerController($req, $res);   
        $TrackerController->getByid();
    });

    
    
    $app->get("/getBycommand/:command", function ($req, $res) {
        $TrackerController = new TrackerController($req, $res);   
        $TrackerController->getBycommand();
    });

    
    
    $app->get("/getBytimeStamp/:timeStamp", function ($req, $res) {
        $TrackerController = new TrackerController($req, $res);   
        $TrackerController->getBytimeStamp();
    });

     
 

    
     
        $app->post("/",function ($req, $res){
            $TrackerController = new TrackerController($req, $res);   
            $TrackerController->setTracker();
        });
     
 

    
    
    $app->patch("/updateByid/:id", function ($req, $res) {
        $TrackerController = new TrackerController($req, $res);   
        $TrackerController->updateByid();
    });

    
    
    $app->patch("/updateBycommand/:command", function ($req, $res) {
        $TrackerController = new TrackerController($req, $res);   
        $TrackerController->updateBycommand();
    });

    
    
    $app->patch("/updateBytimeStamp/:timeStamp", function ($req, $res) {
        $TrackerController = new TrackerController($req, $res);   
        $TrackerController->updateBytimeStamp();
    });

     
 

    
    
    $app->delete("/deleteByid/:id", function ($req, $res) {
        $TrackerController = new TrackerController($req, $res);   
        $TrackerController->removeByid();
    });

    
 

    
    
    $app->delete("/deleteBycommand/:command", function ($req, $res) {
        $TrackerController = new TrackerController($req, $res);   
        $TrackerController->removeBycommand();
    });

    
 

    
    
    $app->delete("/deleteBytimeStamp/:timeStamp", function ($req, $res) {
        $TrackerController = new TrackerController($req, $res);   
        $TrackerController->removeBytimeStamp();
    });

    
 

    

    