<?php

$parent = "/tracker/";

$app->get($parent . "add", function ($req, $res) {
    insertInto("Tracker", '{"id": 4, "command": "yes aslkfjadslkjflk" , "timeStamp": "2023/12/26" }');
    $res->send(200, "yes");
});

$app->get($parent . "get", function ($req, $res) {
    $res->send(200, getTable("Tracker"));
});


$app->get($parent . "update", function ($req, $res) {
    updateWhen("id = 2", "tracker", $req["body"]);
    $res->send(200, $req["body"]);
});

$app->get($parent."updater", function($req,$res) {
    $db  = new connect();
//     $trigger_code = <<<EOT
// CREATE TRIGGER my_table_insert_trigger
// AFTER INSERT ON tracker
// FOR EACH ROW
// BEGIN
//     SET @command = CONCAT("echo '", NEW.command, "' > /path/to/my_cache.txt");
//     CALL system(@command);
// END;
// EOT;

//     $db->q($trigger_code);

    createCache("tracker","{}");

    $res->send(200,$req["body"]);
});
