<?php
        include "./controller/StudentController.php";
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("Student");

        
    $app->get("/", function ($req, $res) {
        $StudentController = new StudentController($req, $res);   
        $StudentController->getStudent();
    });
     
 
 
        
    $app->get("/:id", function ($req, $res) {
        $StudentController = new StudentController($req, $res);   
        $StudentController->getStudent();
    });
     
 

        
    
    $app->get("/getByid/:id", function ($req, $res) {
        $StudentController = new StudentController($req, $res);   
        $StudentController->getByid();
    });

    
    
    $app->get("/getByusername/:username", function ($req, $res) {
        $StudentController = new StudentController($req, $res);   
        $StudentController->getByusername();
    });

    
    
    $app->get("/getBypassword/:password", function ($req, $res) {
        $StudentController = new StudentController($req, $res);   
        $StudentController->getBypassword();
    });

     
 

        
     
        $app->post("/",function ($req, $res){
            $StudentController = new StudentController($req, $res);   
            $StudentController->setStudent();
        });
     
 

        
    
    $app->patch("/updateByid/:id", function ($req, $res) {
        $StudentController = new StudentController($req, $res);   
        $StudentController->updateByid();
    });

    
    
    $app->patch("/updateByusername/:username", function ($req, $res) {
        $StudentController = new StudentController($req, $res);   
        $StudentController->updateByusername();
    });

    
    
    $app->patch("/updateBypassword/:password", function ($req, $res) {
        $StudentController = new StudentController($req, $res);   
        $StudentController->updateBypassword();
    });

     
 

        
    
    $app->delete("/deleteByid/:id", function ($req, $res) {
        $StudentController = new StudentController($req, $res);   
        $StudentController->removeByid();
    });

    
 

    
    
    $app->delete("/deleteByusername/:username", function ($req, $res) {
        $StudentController = new StudentController($req, $res);   
        $StudentController->removeByusername();
    });

    
 

    
    
    $app->delete("/deleteBypassword/:password", function ($req, $res) {
        $StudentController = new StudentController($req, $res);   
        $StudentController->removeBypassword();
    });

    
 

    

        