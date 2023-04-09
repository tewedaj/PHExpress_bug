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

    echo json_encode($variables);
}

