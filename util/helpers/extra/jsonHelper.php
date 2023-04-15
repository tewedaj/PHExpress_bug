<?php
function object_to_json($obj)
{
    return json_encode($obj);
}


//get data point and data type from the model
//and creates a json for it
function extractVariables($classDefinition) {
    $variables = [];

    preg_match_all('/private\s+(\w+)\s+\$(\w+)\s*;\s*\/\/size:\s*(\d+)?/', $classDefinition, $matches, PREG_SET_ORDER);

    foreach ($matches as $match) {
    //    echo json_encode($match);
        $variable = [
            'type' => $match[1],
            'name' => $match[2],
            'size' => isset($match[3]) ? intval($match[3]) : null,
        ];

        $variables[] = $variable;
    }

    return json_encode($variables);
}


function getPathRegex($path): string
{
  
    $keys = array();

    // Replace placeholders with regular expression patterns
    // $pattern = preg_replace_callback('/:(\w+)/', function ($matches) use (&$keys) {
    //     $keys[] = $matches[1];
    //     return '(\d+)';
    // }, $path);

    // // Add anchors and optional trailing slash
    // $regexp = '/^\\' . $pattern . '\\/?$/i';
    // $string = '/by/:id/test/:yu';
   // /^\/by\/\(\d+)\/test\/\(\d+)$/
$pattern = '/^' . preg_replace('/:[a-z]+/', '([\d\w]+)', preg_quote($path, '/')) . '$/';

$pattern = '/^' . preg_replace('/:[a-z]+/', '([\d\w]+)', preg_quote($path, '/')) . '$/';
// echo $pattern;

    return $pattern; 

}