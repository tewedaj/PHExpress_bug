<?php
    include "./controller/TestModel2Controller.php";
    //auto generated file 
 
    
    $app = new phexpress();
    $app->setParent("TestModel2");

    
    $app->get("/", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->getTestModel2();
    });
     
 
 
    
    
    $app->get("/getByid/:id", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->getByid();
    });

    
    
    $app->get("/getByusername/:username", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->getByusername();
    });

    
    
    $app->get("/getBypassword/:password", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->getBypassword();
    });

    
    
    $app->get("/getByuserid/:userid", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->getByuserid();
    });

     
 

    
     
        $app->post("/",function ($req, $res){
            $TestModel2Controller = new TestModel2Controller($req, $res);   
            $TestModel2Controller->setTestModel2();
        });
     
 

    
    
    $app->patch("/updateByid/:id", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->updateByid();
    });

    
    
    $app->patch("/updateByusername/:username", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->updateByusername();
    });

    
    
    $app->patch("/updateBypassword/:password", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->updateBypassword();
    });

    
    
    $app->patch("/updateByuserid/:userid", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->updateByuserid();
    });

     
 

    
    
    $app->delete("/deleteByid/:id", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->removeByid();
    });

    
 

    
    
    $app->delete("/deleteByusername/:username", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->removeByusername();
    });

    
 

    
    
    $app->delete("/deleteBypassword/:password", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->removeBypassword();
    });

    
 

    
    
    $app->delete("/deleteByuserid/:userid", function ($req, $res) {
        $TestModel2Controller = new TestModel2Controller($req, $res);   
        $TestModel2Controller->removeByuserid();
    });

    
 

    

    