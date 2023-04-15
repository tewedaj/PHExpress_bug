<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Util imports
include "./util/phexpress.php";
include "./util/helpers/interface/response.php";
include "./util/helpers/extra/jsonHelper.php";



//Route imports
include "./routes/student.php";
