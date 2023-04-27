function updateByC(modelName,model){
    var response = "";
   model.forEach(variable => {
    var paramName = variable.name.split("_").join("");

    response = response + `
        public function updateBy${paramName}(){
        $response  =   $this->updateWhen(" ${variable.name} = ". $this->request["params"]["${paramName}"] ,"${modelName}",$this->request["body"]);
            if($response["Success"]){
                $this->response->app(200,'{"Success": true , "Message": "Successfully Added"}');
            }else{
                $this->response->app(500,'{"Success": false , "Message":"Something Went Wrong"}');
            }
        }
    `;

   });

   return response;
}


module.exports = {
    updateByC: updateByC
};