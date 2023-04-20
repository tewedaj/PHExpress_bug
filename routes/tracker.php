<?php

    $app = new phexpress();
    $app->setParent("tracker");

$app->get("/add", function ($req, $res) {
    insertInto("Tracker", '{"id": 4, "command": "yes aslkfjadslkjflk" , "timeStamp": "2023/12/26" }');
    $res->send(200, '{"success": true}');
});



$app->get("/get", function ($req, $res) {
    
    global $db; 
    
    $db->q("SELECT TABLE_NAME
    FROM INFORMATION_SCHEMA.TABLES
    ");
    

    $response = $db->querys->fetch_all(MYSQLI_ASSOC);

    $res->send(200, json_encode($response));
});


$app->get("/update", function ($req, $res) {
    updateWhen("id = 2", "tracker", $req["body"]);
    $res->send(200, $req["body"]);
});

$app->get("/updater", function($req,$res) {
    

    $res->send(200,$req["body"]);
});
