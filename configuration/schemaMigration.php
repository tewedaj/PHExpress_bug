<?php

$sqlQueries = "";
try {
  
  global $db;

    $dbName = $settings["databaseName"];
    $db->q("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = '". $dbName."'");


    $response = $db->querys->fetch_all(MYSQLI_ASSOC);
    $size = count($response)-1;

  $dir = './model/'; 

  $files = scandir($dir); 
  $listOfQuery = [];
  $x = 0;


  foreach ($models as $file) {
   $modelName = strtolower(explode(".",$file)[0]);
   
    if(findTable($modelName,$response,$size) == false){
  $modelDetail =  getModelStructure($file);
    $orm = new ORM();
  $sqlQueries .= $orm->createTable(str_replace(".php","",$file), $modelDetail) ;
  // $listOfQuery[$x] = createTable(str_replace(".php","",$file), $modelDetail);

}



}


  if($sqlQueries != ""){
    $db->connect->multi_query($sqlQueries);

  }

} catch (Exception $e){
  echo $e->getMessage();
}
function getModelStructure($modelUri)
{
  $filename = "./model/" . $modelUri;
  $handle = fopen($filename, "r");
  if ($handle) {
    $content = fread($handle, filesize($filename));
    return  extractVariables($content);
    fclose($handle);
  } else {
    echo "Unable to open file!";
  }
}
