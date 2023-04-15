<?php


function createTable($table_name, $columns) {
   
    $columnsf = json_decode($columns,true);
    $query = "CREATE TABLE " . $table_name . " (";
    $i = 0;
    
    foreach ( $columnsf as $i => $column) {
        $query .= $column["name"] . " " . $column["type"] . "(" . $column["size"] . ")";
        if ($i < count($columnsf) - 1) {
            $query .= ", ";
        }
    }

    $query .= ")";
    echo $query;
}
