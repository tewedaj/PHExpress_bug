function updateBy(modelName,model){
    var response = "";
   model.forEach(variable => {
    response = response +  `
    
    $app->patch("/:${variable.name}", function ($req, $res) {
        updateWhen(" ${variable.name} = ". $req["params"]["${variable.name}"] ,"${modelName}",$req["body"]);
    });

    `;

   });

   return response;
}


module.exports = {
    updateBy: updateBy
};