<?php


class Request{
    private $method = $_SERVER['REQUEST_METHOD'];
    private $url =$_SERVER["REQUEST_URI"];
    private $headers = getallheaders();
    private $body =  file_get_contents('php://input');

}