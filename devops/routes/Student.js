
    var Student_controller = require("../controller/StudentController");
    var express = require('express');
    
    //auto generated file 
 
    
    //$app->setParent("Student");
   
    var app = express();


    
    app.get("/", function (req, res) {
        Student_controller.getStudent();
    });
     
 
 
    
    
    app.get("/getByid/:id", function (req, res) {
        Student_controller.getByid(req.params.id).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getByusername/:username", function (req, res) {
        Student_controller.getByusername(req.params.username).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getBypassword/:password", function (req, res) {
        Student_controller.getBypassword(req.params.password).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

     
 

    


    