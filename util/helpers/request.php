<?php


class Request{
    public $method = $_SERVER['REQUEST_METHOD'];
    public $url =$_SERVER["REQUEST_URI"];
    public $headers = getallheaders();
    public $body =  file_get_contents('php://input');

}