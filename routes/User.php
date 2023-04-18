<?php


 $app->get("/users/get", function($req,$res){

     $res->send(200,getJoinedTable("testmodel2","",["user,user_id"]));
 });