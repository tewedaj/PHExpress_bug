function updateBy(modelName,model){
    var response = "";
   model.forEach(variable => {
    var paramName = variable.name.split("_").join("");

    response = response +  `
    
    $app->patch("/getBy${paramName}/:${variable.name.split("_").join("")}", function ($req, $res) {
        updateWhen(" ${variable.name} = ". $req["params"]["${paramName}"] ,"${modelName}",$req["body"]);
    });

    `;

   });

   return response;
}


module.exports = {
    updateBy: updateBy
};