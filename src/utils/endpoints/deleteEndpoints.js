


function deleteBy(modelName, model) {
    var response = "";
    model.forEach(variable => {
        response = response + `
    
    $app->delete("/:${variable.name}", function ($req, $res) {
        $deleteResult = deleteTable(" ${variable.name} = ". $req["params"]["${variable.name}"] ,"${modelName}");
        if($deleteResult["Success"]){
            $res->send(200, getTableWhen(" ${variable.name} = ". $req["params"]["${variable.name}"] ,"${modelName}"));
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