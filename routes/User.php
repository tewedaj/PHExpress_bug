<?php
    include "./controller/UserController.php";
    //auto generated file 
 
    
    $app = new phexpress();
    $app->setParent("User");

    
    $app->get("/", function ($req, $res) {
        $UserController = new UserController($req, $res);   
        $UserController->getUser();
    });
     
 
 
    
    
    $app->get("/getByid/:id", function ($req, $res) {
        $UserController = new UserController($req, $res);   
        $UserController->getByid();
    });

    
    
    $app->get("/getByusername/:username", function ($req, $res) {
        $UserController = new UserController($req, $res);   
        $UserController->getByusername();
    });

    
    
    $app->get("/getBypassword/:password", function ($req, $res) {
        $UserController = new UserController($req, $res);   
        $UserController->getBypassword();
    });

     
 

    
     
        $app->post("/",function ($req, $res){
            $UserController = new UserController($req, $res);   
            $UserController->setUser();
        });
     
 

    
    
    $app->patch("/updateByid/:id", function ($req, $res) {
        $UserController = new UserController($req, $res);   
        $UserController->updateByid();
    });

    
    
    $app->patch("/updateByusername/:username", function ($req, $res) {
        $UserController = new UserController($req, $res);   
        $UserController->updateByusername();
    });

    
    
    $app->patch("/updateBypassword/:password", function ($req, $res) {
        $UserController = new UserController($req, $res);   
        $UserController->updateBypassword();
    });

     
 

    
    
    $app->delete("/deleteByid/:id", function ($req, $res) {
        $UserController = new UserController($req, $res);   
        $UserController->removeByid();
    });

    
 

    
    
    $app->delete("/deleteByusername/:username", function ($req, $res) {
        $UserController = new UserController($req, $res);   
        $UserController->removeByusername();
    });

    
 

    
    
    $app->delete("/deleteBypassword/:password", function ($req, $res) {
        $UserController = new UserController($req, $res);   
        $UserController->removeBypassword();
    });

    
 

    

    