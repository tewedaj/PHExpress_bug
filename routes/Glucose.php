<?php
        
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("Glucose");

        
    $app->get("/", function ($req, $res) {
        $res->send(200, getTable("Glucose"));
    });
     
 
 
        
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req->params["id"] ,"Glucose"));
    });
     
 

        
    
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req->params["id"] ,"Glucose"));
    });

    
    
    $app->get("/:user_id", function ($req, $res) {
        $res->send(200, getTableWhen(" user_id = ". $req->params["user_id"] ,"Glucose"));
    });

    
    
    $app->get("/:mg_dl", function ($req, $res) {
        $res->send(200, getTableWhen(" mg_dl = ". $req->params["mg_dl"] ,"Glucose"));
    });

    
    
    $app->get("/:carb", function ($req, $res) {
        $res->send(200, getTableWhen(" carb = ". $req->params["carb"] ,"Glucose"));
    });

    
    
    $app->get("/:insuline", function ($req, $res) {
        $res->send(200, getTableWhen(" insuline = ". $req->params["insuline"] ,"Glucose"));
    });

     
 

        
        //expected body
        /*
        {"id":0
 	 	user_id":""
 	 	mg_dl":0
 	 	carb":0
 	 	insuline":0} 

        */
        $app->post("/",function ($req, $res){
            $res->send(200,insertInto("Glucose",$req["body"]));
        });
    
        