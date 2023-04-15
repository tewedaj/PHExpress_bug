<?php


function createTable($table_name, $columns)
{

    $columnsf = json_decode($columns, true);
    $query = "CREATE TABLE " . $table_name . " (";
    $i = 0;

    foreach ($columnsf as $i => $column) {
        $query .= $column["name"] . " " . str_replace("String", "varchar", str_replace("string", "varchar", $column["type"])) . "(" . $column["size"] . ")";
        if ($i < count($columnsf) - 1) {
            $query .= ", ";
        }
    }

    $query .= ");";
    return $query;
}

function getTable($tableName)
{
    $query = "SELECT * FROM " . $tableName;

    $db = new connect();

    $db->q($query);

    echo json_encode($db->querys->fetch_all( MYSQLI_ASSOC ));
}


function insertInto($tableName, $body)
{
    $body = json_decode($body);
    $queryBuilder = "INSERT INTO " . $tableName . "(";
    $index = 0;
    foreach ($body as $key => $value) {
        if ($index == 0) {
            $queryBuilder = $queryBuilder . $key;
        } else {
            $queryBuilder = $queryBuilder . "," . $key;
        }
        $index = $index + 1;
    }
    $queryBuilder = $queryBuilder . ") VALUES (";
    $index2 = 0;
    foreach ($body as $key => $value) {
        if ($index2 == 0) {
            $queryBuilder = $queryBuilder . "'" . $value . "'";
        } else {
            $queryBuilder = $queryBuilder . ",'" . $value . "'";
        }
        $index2++;
    }

    $queryBuilder = $queryBuilder . ");";
    $db = new connect();

    $db->q($queryBuilder);
}

function updateWhen($condition, $tableName, $body)
{
    $body = json_decode($body);
    $queryBuilder = "UPDATE " . $tableName . " SET ";
    foreach ($body as $key => $value) {
        $queryBuilder .= "$key = $value";
    }
    $queryBuilder .= " WHERE $condition";
    $queryBuilder .= ");";
}
