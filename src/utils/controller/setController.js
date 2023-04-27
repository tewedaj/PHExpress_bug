


function set(modelName){
    var json = [];
    var obj = {};
    return `
        function set${modelName}(){
             $response = $this->insertInto("${modelName}",$this->request["body"]);
            if($response["Success"]){
                $this->response->send(200,$response);
            }else{
                $this->response->send(500,'{"Success": false , "Message": " Something Went Wrong"}');
            }
        }
    `;
}

module.exports = {
    set: set
};