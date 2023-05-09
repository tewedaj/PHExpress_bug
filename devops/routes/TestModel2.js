
    var TestModel2_controller = require("../controller/TestModel2Controller");
    var express = require('express');
    
    //auto generated file 
 
    
    //$app->setParent("TestModel2");
   
    var app = express();


    
    app.get("/", function (req, res) {
        TestModel2_controller.getTestModel2();
    });
     
 
 
    
    
    app.get("/getByid/:id", function (req, res) {
        TestModel2_controller.getByid(req.params.id).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getByusername/:username", function (req, res) {
        TestModel2_controller.getByusername(req.params.username).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getBypassword/:password", function (req, res) {
        TestModel2_controller.getBypassword(req.params.password).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getByuserid/:userid", function (req, res) {
        TestModel2_controller.getByuserid(req.params.userid).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

     
 

    


    