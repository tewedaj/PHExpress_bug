<?php
        
        //auto generated file 
 
        
        $app = new phexpress();
        $app->setParent("User");

        
    $app->get("/", function ($req, $res) {
        $res->send(200, getTable("User"));
    });
     
 
 
        
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req->params["id"] ,"User"));
    });
     
 

        
    
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req->params["id"] ,"User"));
    });

    
    
    $app->get("/:user_name", function ($req, $res) {
        $res->send(200, getTableWhen(" user_name = ". $req->params["user_name"] ,"User"));
    });

    
    
    $app->get("/:pass_word", function ($req, $res) {
        $res->send(200, getTableWhen(" pass_word = ". $req->params["pass_word"] ,"User"));
    });

     
 

        
        //expected body
        /*
        {"id":0
 	 	user_name":""
 	 	pass_word":""} 

        */
        $app->post("/",function ($req, $res){
            $res->send(200,insertInto("User",$req["body"]));
        });
    
        