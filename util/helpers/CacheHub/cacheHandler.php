<?php


// Create Cache using the name of the table
// using the name of the api call with it's params
// Using Params makes it faster because we are directly 
// featching from the exact file for the exact request
function createCache($cacheName, $cacheObject)
{
    file_put_contents("./cache/" . $cacheName . ".JSON", $cacheObject);
}


//validate weather the cache is valid or not
//condition[1]: if the invalidateTime has passed
//condition[2]: if the file is empty
function isCacheValid($cacheName)
{
    try {

        $cacheBody = file_get_contents("./cache/" . $cacheName . ".JSON");

        if (strlen($cacheBody) > 0) {
            return [true, $cacheBody];
        } else {
            return [false, ""];
        }
    } catch (Exception $e) {
        echo  $e->getMessage();
        return [false, ""];
    }
}
