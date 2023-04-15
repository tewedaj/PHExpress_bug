<?php
include "./model/models.php";
include "./util/helpers/sql/sqlGenerator.php";
include "./db/connection.php";

//Loop through the models file
//Extract the variables and there type
//todo: Generate an sql query to create a database for each model
//todo: Execute the query

$sqlQueries = "";
foreach ($models as $model) {

  $modelDetail =  getModelStructure($model);

  $sqlQueries .= createTable(str_replace(".php","",$model), $modelDetail) ;


}
  $db = new connect();

  $db->connect->multi_query($sqlQueries);

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
