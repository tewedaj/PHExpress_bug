<?php



$app->get("/asf/:sf", function ($req, $res) {

    $res->send(200, '{"test": "data"}');
});



$app->get("/student/get", function ($req, $res) {

    $res->send(200, json_encode($req));
});

$app->get("/by", function ($req, $res) {

    $res->send(200, '{"yoo":"yes"}');
});


$app->get("/by/:id/test/:yu", function ($req, $res) {

    $res->send(200, json_encode($req));
});


$app->get("/yes/no/:zzu/okok/:uiui", function($req,$res) {

    $res->send(200,"uii");

});

$app->get("/yes/no/:zzu/:vvb/df", function($req,$res) {

    $res->send(200,"uii");

});

