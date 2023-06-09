
    var Tracker_controller = require("../controller/TrackerController");
    var express = require('express');
    
    //auto generated file 
 
    
    //$app->setParent("Tracker");
   
    var app = express();


    
    app.get("/", function (req, res) {
        Tracker_controller.getTracker();
    });
     
 
 
    
    
    app.get("/getByid/:id", function (req, res) {
        Tracker_controller.getByid(req.params.id).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getBycommand/:command", function (req, res) {
        Tracker_controller.getBycommand(req.params.command).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getBytimeStamp/:timeStamp", function (req, res) {
        Tracker_controller.getBytimeStamp(req.params.timeStamp).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

     
 

    


    