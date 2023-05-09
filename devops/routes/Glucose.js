
    var Glucose_controller = require("../controller/GlucoseController");
    var express = require('express');
    
    //auto generated file 
 
    
    //$app->setParent("Glucose");
   
    var app = express();


    
    app.get("/", function (req, res) {
        Glucose_controller.getGlucose();
    });
     
 
 
    
    
    app.get("/getByid/:id", function (req, res) {
        Glucose_controller.getByid(req.params.id).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getByuserid/:userid", function (req, res) {
        Glucose_controller.getByuserid(req.params.userid).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getBymgdl/:mgdl", function (req, res) {
        Glucose_controller.getBymgdl(req.params.mgdl).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getBycarb/:carb", function (req, res) {
        Glucose_controller.getBycarb(req.params.carb).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getByinsuline/:insuline", function (req, res) {
        Glucose_controller.getByinsuline(req.params.insuline).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

     
 

    


    