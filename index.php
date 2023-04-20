<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Util imports
include "./db/connection.php";
require "./db/initialize.php";
include "./util/phexpress.php";


include "./util/helpers/interface/response.php";
include "./util/helpers/extra/jsonHelper.php";
include "./util/helpers/CacheHub/Cache.php";
include "./util/helpers/CacheHub/cacheHandler.php";
include "./util/helpers/algo/binarySearch.php";
include "./util/helpers/sql/sqlGenerator.php";
include "./util/setting.php";


$settings["modelController"] ? include "./configuration/schemaMigration.php" : "";
//this will create all the tables if they don't exist
$app = new phexpress();
global $db;
$db = new connect();

//Route imports
include "./routes/student.php";
include "./routes/tracker.php";
include "./routes/User.php";    
