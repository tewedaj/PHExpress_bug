<?php


    $app = new phexpress();
    $app->setParent("users");
    
    $app->get("/get", function($req,$res){

     $res->send(200,getJoinedTable("testmodel2","",["user,user_id"]));
 });