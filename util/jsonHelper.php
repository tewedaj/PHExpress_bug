<?php
function object_to_json($obj)
{
    return json_encode($obj);
}


//get data point and data type from the model
//and creates a json for it
function extractVariables($string)
{
    $regex = '/private\s+([^\s]+)\s+(\$[^\s;]+);/';
    preg_match_all($regex, $string, $matches, PREG_SET_ORDER);

    $variables = array();
    foreach ($matches as $match) {
        $type = $match[1];
        $name = $match[2];
        $variables[$name] = $type;
    }

    $json = json_encode($variables, JSON_PRETTY_PRINT);
    echo ltrim($json, '$');
}
