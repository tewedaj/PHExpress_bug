<?php



function findTableBinary($searchTerm,$starting,$ending,$list): int{
    //calculate the mid once
    $mid = round((($starting + $ending ) / 2));
   
    //this will be the breaking point   
    if($starting > $ending){

        echo "FoundMID: -1 <br>";
        
        return -1;
    }
    //incase they are equall
    if( strcmp($list[$mid]["TABLE_NAME"],$searchTerm)  == 0){
        return $mid;
    //incase the mid is lower 
    }else if(strcmp($list[$mid]["TABLE_NAME"], $searchTerm) < 0){
        return findTableBinary($searchTerm,($mid+1),$ending,$list);
    //incase the mid is higher
    }else if(strcmp($list[$mid]["TABLE_NAME"], $searchTerm) > 0){
       return findTableBinary($searchTerm,$starting,($mid-1),$list);
    }


}


function findTable($searchTerm,$list,$size){

    
    
    for($x = 0; $x < $size; $x++){
       if($list[$x]["TABLE_NAME"] == $searchTerm){
        return true;
       }
    }

    return false;

}