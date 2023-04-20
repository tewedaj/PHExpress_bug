<?php
// include "./model/models.php";
// include "./util/helpers/sql/sqlGenerator.php";
// include "./db/connection.php";

//Loop through the models file
//Extract the variables and there type
//todo: Generate an sql query to create a database for each model
//todo: Execute the query

$sqlQueries = "";
try {
 

  $dbName = $settings["databaseName"];
$db->rawQuery("CREATE DATABASE IF NOT EXISTS ". $dbName);


    $db->q("SELECT TABLE_NAME
    FROM INFORMATION_SCHEMA.TABLES
    ");


    $response = $db->querys->fetch_all(MYSQLI_ASSOC);
    $size = count($response)-1;

  $dir = './model/'; 

  $files = scandir($dir); 
  
  foreach ($files as $file) {
   $modelName = strtolower(explode(".",$file)[0]);
  if($file != "." && $file != ".."  ){
   
    if(!findTable($modelName,$response,$size)){
      echo "iii: ". $modelName . " <br>";
  $modelDetail =  getModelStructure($file);
  echo "iii: ". json_encode($modelDetail) . " <br>";

  $sqlQueries .= createTable(str_replace(".php","",$file), $modelDetail) ;

}
}


}

  

  $db->connect->multi_query($sqlQueries);
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
