<?php

/**
 * This class is responsible for handling the response given to the API request.
 * It will be utilized as a callback function in conjunction with the routing interface,
 * which has two parameters. This class will serve as the second parameter and
 * will be responsible for managing the response sent back to the client.
 */

class Response
{

    public  function respons($statusCode, $data)
    {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
