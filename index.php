<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Util imports
include "./util/phexpress.php";
include "./util/helpers/interface/response.php";
include "./util/helpers/extra/jsonHelper.php";
include "./util/helpers/CacheHub/Cache.php";
include "./util/helpers/CacheHub/cacheHandler.php";
include "./util/helpers/sql/sqlGenerator.php";
include "./model/models.php";
include "./db/connection.php";


//this will create all the tables if they don't exist
// include "./configuration/schemaMigration.php";

$app = new phexpress();

//Route imports
include "./routes/student.php";
include "./routes/tracker.php";
include "./routes/User.php";

