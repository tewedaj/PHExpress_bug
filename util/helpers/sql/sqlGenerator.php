<?php


function createTable($table_name, $columns)
{

    $columnsf = json_decode($columns, true);
    $query = "CREATE TABLE " . $table_name . " (";
    $i = 0;
    $typeList = ["int", "DateTime", "String", "string", "Boolean", "Float"];
    $foreginKeys = "";
    foreach ($columnsf as $i => $column) {

        if (in_array($column["type"], $typeList)) {

            $query .= $column["name"] . " " . str_replace("String", "varchar", str_replace("string", "varchar", $column["type"])) . "(" . $column["size"] . ")";
        } else {
            $query .= $column["name"] . " int(" . $column["size"] . ")";


            $foreginKeys .= ", FOREIGN KEY (" . $column["name"]  . ") REFERENCES " . $column["type"] . "(id)";
        }
        if ($i < count($columnsf) - 1) {
            $query .= ", ";
        }
    }

    $query .= ",  PRIMARY KEY (id) " . $foreginKeys . " );";
    return $query;
}

function getTable($tableName)
{

    $cacheObj = isCacheValid($tableName);
    $data = json_decode($cacheObj[1], true);

    $date1 = new DateTime($data["timeStamp"]);
    $date2 = new DateTime($data["invalidateTime"]);
    $interval = $date1->diff($date2);
    if ($cacheObj[0]) {
        if ($interval->days > 0) {
            echo json_encode($data["data"]);
        } else {
            $query = "SELECT * FROM " . $tableName;
            $db = new connect();
            $db->q($query);
            $allResponse = $db->querys->fetch_all(MYSQLI_ASSOC);
            $cache = new Cache();
            $current_date = date('Y-m-d H:i:s');
            $invalidateDate = date('Y-m-d H:i:s', strtotime('+2 days'));
            $cache->setTimeStamp($current_date);
            $cache->setInvalidateTime($invalidateDate);
            $cache->setData(json_encode($allResponse));
            createCache($tableName, $cache);
            echo json_encode($allResponse);
        }
    } else {
        $query = "SELECT * FROM " . $tableName;
        $db = new connect();
        $db->q($query);
        $allResponse = $db->querys->fetch_all(MYSQLI_ASSOC);
        $cache = new Cache();
        $current_date = date('Y-m-d H:i:s');
        $invalidateDate = date('Y-m-d H:i:s', strtotime('+2 days'));
        $cache->setTimeStamp($current_date);
        $cache->setInvalidateTime($invalidateDate);
        $cache->setData(json_encode($allResponse));
        createCache($tableName, $cache);
        echo json_encode($allResponse);
    }
}

function getTableWhen($condition, $tableName)
{

    $trimedCondition = str_replace("=", "_", str_replace(' ', '', $condition));

  

    if(file_exists($tableName)){
        $cacheObj = isCacheValid($tableName."_".$trimedCondition);

    }else{
        $cacheObj = [false,""];
    }

    
 
   
    if ($cacheObj[0]) {
        $data = json_decode($cacheObj[1], true);
        $date1 = new DateTime($data["timeStamp"]);
        $date2 = new DateTime($data["invalidateTime"]);
        $interval = $date1->diff($date2);
        if ($interval->days > 0) {
            echo json_encode($data["data"]);
        } else {
            $query = "SELECT * FROM " . $tableName . "  WHERE " . $condition;
            $db = new connect();
            $db->q($query);
            $allResponse = $db->querys->fetch_all(MYSQLI_ASSOC);
            $cache = new Cache();
            $current_date = date('Y-m-d H:i:s');
            $invalidateDate = date('Y-m-d H:i:s', strtotime('+2 days'));
            $cache->setTimeStamp($current_date);
            $cache->setInvalidateTime($invalidateDate);
            $cache->setData(json_encode($allResponse));
            createCache($tableName . "_" . $trimedCondition, $cache);
            echo json_encode($allResponse);
        }
    } else {
        $query = "SELECT * FROM " . $tableName . "  WHERE " . $condition;
        $db = new connect();
        $db->q($query);
        $allResponse = $db->querys->fetch_all(MYSQLI_ASSOC);
        $cache = new Cache();
        $current_date = date('Y-m-d H:i:s');
        $invalidateDate = date('Y-m-d H:i:s', strtotime('+2 days'));
        $cache->setTimeStamp($current_date);
        $cache->setInvalidateTime($invalidateDate);
        $cache->setData(json_encode($allResponse));
        createCache($tableName . "_" . $trimedCondition, $cache);
        echo json_encode($allResponse);
    }
}

// ["tableName,id"]
function getJoinedTable($tableName, $condition, $joins)
{
    $trimedCondition = str_replace("\"","", str_replace(",","_",str_replace("]","",str_replace("[","_",str_replace("=", "_", str_replace(' ', '', $condition)).".".json_encode($joins)))));
    // $trimedCondition = $tableName;
    if(file_exists($tableName)){
        $cacheObj = isCacheValid($tableName."_".$trimedCondition);

    }else{
        $cacheObj = [false,""];
    }

    
 
   
    if ($cacheObj[0]) {
        $data = json_decode($cacheObj[1], true);
        $date1 = new DateTime($data["timeStamp"]);
        $date2 = new DateTime($data["invalidateTime"]);
        $interval = $date1->diff($date2);
        if ($interval->days > 0) {
            echo json_encode($data["data"]);
        } else {

            $query = "SELECT * FROM " . $tableName;

            for ($index = 0; $index < count($joins); $index++) {
                $splited = explode(",",$joins[$index]);
                $query .= " JOIN " . $splited[0] . "  ON " . $splited[0] . ".id = " . $tableName . "." . $splited[1];
            }
            if ($condition !== "") {
                $query .=   "WHERE " . $condition;
            }
            $db = new connect();
            $db->q($query);
            $allResponse = $db->querys->fetch_all(MYSQLI_ASSOC);
            $cache = new Cache();
            $current_date = date('Y-m-d H:i:s');
            $invalidateDate = date('Y-m-d H:i:s', strtotime('+2 days'));
            $cache->setTimeStamp($current_date);
            $cache->setInvalidateTime($invalidateDate);
            $cache->setData(json_encode($allResponse));
            createCache($tableName . "_" . $trimedCondition, $cache);
            echo json_encode($allResponse);
        }
    } else {
        // $query = "SELECT * FROM " . $tableName . " " . $condition;
        $query = "SELECT * FROM " . $tableName;

        for ($index = 0; $index < count($joins); $index++) {
            $splited = explode(",",$joins[$index]);

            $query .= " JOIN " . $splited[0] . "  ON " . $splited[0] . ".id = " . $tableName . "." . $splited[1];
        }
        if ($condition !== "") {
            $query .=   "WHERE " . $condition;
        }
      
        $db = new connect();
        $db->q($query);
        $allResponse = $db->querys->fetch_all(MYSQLI_ASSOC);
        $cache = new Cache();
        $current_date = date('Y-m-d H:i:s');
        $invalidateDate = date('Y-m-d H:i:s', strtotime('+2 days'));
        $cache->setTimeStamp($current_date);
        $cache->setInvalidateTime($invalidateDate);
        $cache->setData(json_encode($allResponse));
        createCache($tableName . "_" . $trimedCondition, $cache);
        echo json_encode($allResponse);
    }
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
    invalidateCache($tableName);
}

function updateWhen($condition, $tableName, $body)
{
    $body = json_decode($body);
    $queryBuilder = "UPDATE " . $tableName . " SET ";
    $index = 1;
    $size = count((array)$body);
    foreach ($body as $key => $value) {
        if ($index == $size) {
            $queryBuilder .= " $key =  '$value' ";
        } else {
            $queryBuilder .= " $key =  '$value' ,";
        }
        $index++;
    }
    $queryBuilder .= " WHERE  $condition";



    $db = new connect();

    $db->q($queryBuilder);
}
