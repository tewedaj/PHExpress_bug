
    var TestModel3_controller = require("../controller/TestModel3Controller");
    var express = require('express');
    
    //auto generated file 
 
    
    //$app->setParent("TestModel3");
   
    var app = express();


    
    app.get("/", function (req, res) {
        TestModel3_controller.getTestModel3();
    });
     
 
 
    
    
    app.get("/getByid/:id", function (req, res) {
        TestModel3_controller.getByid(req.params.id).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getByusername/:username", function (req, res) {
        TestModel3_controller.getByusername(req.params.username).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getBypassword/:password", function (req, res) {
        TestModel3_controller.getBypassword(req.params.password).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getByuserid/:userid", function (req, res) {
        TestModel3_controller.getByuserid(req.params.userid).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

     
 

    


    