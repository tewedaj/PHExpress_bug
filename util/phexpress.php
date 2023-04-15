<?php
/*
This PHP file handles all the routing interfaces, with support for HTTP methods POST, GET, PATCH, and DELETE.
The code is designed to resemble the syntax of Node.js as closely as possible.
*/

class phexpress
{

    private String $header = "";
    private $requests = [];

    function __construct()
    {
        $this->requests =  [
            "method" => $_SERVER['REQUEST_METHOD'],
            "url" => $_SERVER["REQUEST_URI"],
            "headers" =>  getallheaders(),
            "body" =>   file_get_contents('php://input'),
            "params" => []
        ];
    }

    public function Get(String $routes, $callBack)
    {
        $url = $this->requests["url"];

        if (!($this->requests["method"] == "POST")) {

            $path = parse_url($url, PHP_URL_PATH);
            $path3 = explode(rtrim($routes, "/"), $path);
            if (count($path3) > 1) {
                if ($path3[1] == "" || $path3[1] == "/") {
                    $response = new Response();
                    $callBack($this->requests, $response);
                    exit;
                }
            } else {

                //generate a specific request based on the route given
                $pattern =   getPathRegex($routes);
                $pattern = str_replace('\(', '(', $pattern);

                //             /^\/by\/(\d+)\/test\/(\d+)$/";
                //             /^\/by\/(\d+)\/test\/(\d+)$/
                //             /^\/by\/\(\d+)\/test\/\(\d+)$/
                //             /^/by/([^\/]+)/test/([^\/]+)\/?$/
                //              /^\/by/(\d+)/test/(\d+)\/?$/i
                //              /^\/by/(\d+)/test/(\d+)\/?$/i
                $variables = explode(":", $routes);

                if (count($variables) > 1) {
                    $matches = array();
                    $finalUri = str_replace("PHExpress/", "", $path3[0]);
                    $finalUri = rtrim($finalUri, "/");


                    if (preg_match($pattern, $finalUri, $matches)) {
                        $keyMatch = array();

                        preg_match($pattern, str_replace(":", "", $routes), $keyMatch);

                        $id = $matches[1];
                        $yu = $matches[2];
                        echo '{
                         "' . $keyMatch[1] . '":' . $id . ',
                         "' . $keyMatch[2] . '":"' . $yu . '"
                         }';
                    }
                }
            }
        }
    }


    public function Post(String $routes, $callBack)
    {

        // Check if HTTP Request type
        // pass if it is POST
        if ($this->requests["method"] == "POST") {
            
            $url = $_SERVER["REQUEST_URI"];
            $path = parse_url($url, PHP_URL_PATH);
            $path3 = explode($routes, $path);

            if (count($path3) > 1) {
                if ($path3[1] == "") {
                    $response = new Response();
                    $callBack($this->requests, $response);
                    exit;
                }
            } else {
                return false;
            }
        }
    }
}
