


//Select * end point 
function select(modelName){
    var response = `
    $app->get("/", function ($req, $res) {
        $${modelName}Controller = new ${modelName}Controller($req, $res);   
        $${modelName}Controller->get${modelName}();
    });
    `;

    return response;
}


//Select modelName by id
function selectById(modelName){
    var response = `
    $app->get("/:id", function ($req, $res) {
        $${modelName}Controller = new ${modelName}Controller($req, $res);   
        $${modelName}Controller->get${modelName}();
    });
    `;
    return response;
}

//select by all data points
function selectBy(modelName,model){
    var response = "";
   model.forEach(variable => {
    var paramName = variable.name.split("_").join("");
    response = response +  `
    
    $app->get("/getBy${paramName}/:${paramName}", function ($req, $res) {
        $${modelName}Controller = new ${modelName}Controller($req, $res);   
        $${modelName}Controller->getBy${paramName}();
    });

    `;

   });

   return response;
}



module.exports = {
    select: select,
    selectBy: selectBy,
    selectById: selectById
}