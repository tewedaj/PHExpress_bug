<?php

$app = new phexpress();


$app->get("/asf/:sf", function ($req, $res) {

    $res->respons(200, '{"test": "data"}');
});



$app->get("/get", function ($req, $res) {

    $res->respons(200, json_encode($req));
});

$app->get("/by", function ($req, $res) {

    $res->respons(200, '{"yoo":"yes"}');
});


$app->get("/by/:id/test/:yu", function ($req, $res) {

    $res->respons(200, json_encode($req));
});


$app->get("/yes/no/:zzu/okok/:uiui", function($req,$res) {

    $res->respons(200,"uii");

});

$app->get("/yes/no/:zzu/:vvb/df", function($req,$res) {

    $res->respons(200,"uii");

});

