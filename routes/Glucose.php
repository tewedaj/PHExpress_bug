<?php
        include "./controller/GlucoseController.php";
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("Glucose");

        
    $app->get("/", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->getGlucose();
    });
     
 
 
        
    $app->get("/:id", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->getGlucose();
    });
     
 

        
    
    $app->get("/getByid/:id", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->getByid();
    });

    
    
    $app->get("/getByuserid/:userid", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->getByuserid();
    });

    
    
    $app->get("/getBymgdl/:mgdl", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->getBymgdl();
    });

    
    
    $app->get("/getBycarb/:carb", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->getBycarb();
    });

    
    
    $app->get("/getByinsuline/:insuline", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->getByinsuline();
    });

     
 

        
     
        $app->post("/",function ($req, $res){
            $GlucoseController = new GlucoseController($req, $res);   
            $GlucoseController->setGlucose();
        });
     
 

        
    
    $app->patch("/updateByid/:id", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->updateByid();
    });

    
    
    $app->patch("/updateByuserid/:userid", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->updateByuserid();
    });

    
    
    $app->patch("/updateBymgdl/:mgdl", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->updateBymgdl();
    });

    
    
    $app->patch("/updateBycarb/:carb", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->updateBycarb();
    });

    
    
    $app->patch("/updateByinsuline/:insuline", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->updateByinsuline();
    });

     
 

        
    
    $app->delete("/deleteByid/:id", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->removeByid();
    });

    
 

    
    
    $app->delete("/deleteByuserid/:userid", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->removeByuserid();
    });

    
 

    
    
    $app->delete("/deleteBymgdl/:mgdl", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->removeBymgdl();
    });

    
 

    
    
    $app->delete("/deleteBycarb/:carb", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->removeBycarb();
    });

    
 

    
    
    $app->delete("/deleteByinsuline/:insuline", function ($req, $res) {
        $GlucoseController = new GlucoseController($req, $res);   
        $GlucoseController->removeByinsuline();
    });

    
 

    

        