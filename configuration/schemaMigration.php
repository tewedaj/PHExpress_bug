<?php
include "../model/models.php";
include "../util/jsonHelper.php";
include "../util/sqlGenerator.php";

//Loop through the models file
//Extract the variables and there type
//todo: Generate an sql query to create a database for each model
//todo: Execute the query
foreach ($models as $model) {

 $modelDetail =  getModelStructure($model);

  createTable("sf",$modelDetail);
}

function getModelStructure($modelUri)
{
  $filename = "../model/".$modelUri;
  $handle = fopen($filename, "r");
  if ($handle) {
    $content = fread($handle, filesize($filename));
  return  extractVariables($content);
    fclose($handle);
  } else {
    echo "Unable to open file!";
  }
}
