


function deleteBy(modelName, model) {
    var response = "";
    model.forEach(variable => {
    var paramName = variable.name.split("_").join("");

        response = response + `
    
    $app->delete("/deleteBy${paramName}/:${paramName}", function ($req, $res) {
        $${modelName}Controller = new ${modelName}Controller($req, $res);   
        $${modelName}Controller->removeBy${paramName}();
    });

    \n \n
    `;

    });
    return response;
}

module.exports = {
    deleteBy: deleteBy
}