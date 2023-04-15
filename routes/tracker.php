<?php

$parent = "/tracker/";

$app->get($parent."add", function($req,$res){
    insertInto("Tracker", '{"id": 2, "command": "yes make ameria great again" , "timeStamp": "2023/12/23" }');

    $res->send(200,"yes");
});

$app->get($parent."get", function($req,$res){


    $res->send(200,getTable("Tracker"));

});


$app->get($parent."update",function($req,$res){
    $res->send(200,getTable("Tracker"));

});

