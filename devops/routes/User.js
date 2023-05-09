
    var User_controller = require("../controller/UserController");
    var express = require('express');
    
    //auto generated file 
 
    
    //$app->setParent("User");
   
    var app = express();


    
    app.get("/", function (req, res) {
        User_controller.getUser();
    });
     
 
 
    
    
    app.get("/getByid/:id", function (req, res) {
        User_controller.getByid(req.params.id).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getByusername/:username", function (req, res) {
        User_controller.getByusername(req.params.username).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getBypassword/:password", function (req, res) {
        User_controller.getBypassword(req.params.password).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

     
 

    


    