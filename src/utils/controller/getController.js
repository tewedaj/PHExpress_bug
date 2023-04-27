





//get 
function get(modelName){
    var response = `
    public function get${modelName}(){
        $response =  $this->getTable("${modelName}");
        // if(is_object($response)){
            $this->response->send(200,$response);
        // }else {
        //     $this->response->send(400,'{"success": false, "message": "Something Went Wrong"}');
        // }
    }
    `
    return response;
}

//get by all data points
function getBy(modelName,model){
    var response = "";
   model.forEach(variable => {
    var paramName = variable.name.split("_").join("");
   

     response = response + `
     
     public function getBy${paramName}(){
        $response = $this->getTableWhen(" ${variable.name} = '".$this->request["params"]["${paramName}"]."' " ,"${modelName}");
        // if(is_object($response)){
            $this->response->send(200,$response);
        // }else {
        //     $this->response->send(400,'{"success": false, "message": "Something Went Wrong"}');
        // }
    }
    
    `;

   });

   return response;
}



module.exports = {
    get: get,
    getBy: getBy,
}