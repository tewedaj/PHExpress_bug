


function deleteBy(modelName, model) {
    var response = "";
    model.forEach(variable => {
    var paramName = variable.name.split("_").join("");

        response = response + `
    
    $app->delete("/getBy${paramName}/:${paramName}", function ($req, $res) {
        $deleteResult = deleteTable(" ${variable.name} = ". $req["params"]["${paramName}"] ,"${modelName}");
        if($deleteResult["Success"]){
            $res->send(200, '{"success": true}');
        }else{
        $res->send(400, '{"err": $deleteResult["Message"]}');
        }
    });

    \n \n
    `;

    });
    return response;
}

module.exports = {
    deleteBy: deleteBy
}