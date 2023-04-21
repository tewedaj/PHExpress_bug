


//Select * end point 
function select(modelName){
    var response = `
    $app->get("/", function ($req, $res) {
        $res->send(200, getTable("${modelName}"));
    });
    `;

    return response;
}


//Select modelName by id
function selectById(modelName){
    var response = `
    $app->get("/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req->params["id"] ,"${modelName}"));
    });
    `;
    return response;
}

//select by all data points
function selectBy(modelName,model){
    var response = "";
   model.forEach(variable => {
    response = response +  `
    
    $app->get("/:${variable.name}", function ($req, $res) {
        $res->send(200, getTableWhen(" ${variable.name} = ". $req->params["${variable.name}"] ,"${modelName}"));
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