


function removeBy(modelName, model) {
    var response = "";
    model.forEach(variable => {
    var paramName = variable.name.split("_").join("");

    response = response + `
        public function removeBy${paramName}(){
            $deleteResult = $this->deleteTable(" ${variable.name} = ". $this->request["params"]["${paramName}"] ,"${modelName}");
            if($deleteResult["Success"]){
                $this->response->send(200, '{"success": true}');
            }else{
                $this->response->send(400, '{"err": $deleteResult["Message"]}');
            }
        }
    `;

    });
    return response;
}

module.exports = {
    removeBy: removeBy
}