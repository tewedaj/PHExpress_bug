function updateBy(modelName,model){
    var response = "";
   model.forEach(variable => {
    var paramName = variable.name.split("_").join("");

    response = response +  `
    
    $app->patch("/updateBy${paramName}/:${variable.name.split("_").join("")}", function ($req, $res) {
        $${modelName}Controller = new ${modelName}Controller($req, $res);   
        $${modelName}Controller->updateBy${paramName}();
    });

    `;

   });

   return response;
}


module.exports = {
    updateBy: updateBy
};