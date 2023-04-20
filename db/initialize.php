<?php

include "./util/setting.php";


$dbName = $settings["databaseName"];
  
$con = mysqli_connect($settings["server"],$settings["userName"],$settings["serverPassword"]);

$con->query("CREATE DATABASE IF NOT EXISTS ". $dbName);