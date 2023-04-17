


//Select * end point 
function select(modelName){
    var response = `
    $app->get("/${modelName}/", function ($req, $res) {
        $res->send(200, getTable("${modelName}"));
    });
    `;

    return response;
}


//Select modelName by id
function selectById(modelName){
    var response = `
    $app->get("/${modelName}/:id", function ($req, $res) {
        $res->send(200, getTableWhen(" id = ". $req->params["id"] ,"${modelName}"));
    });
    `;
    return response;
}

//select by all data points
function selectBy(modelName,model){
    var response = "";
   model.forEach(variable => {
    response +=  `
    
    $app->get("/${modelName}/:${variable}", function ($req, $res) {
        $res->send(200, getTableWhen(" ${variable} = ". $req->params["${variable}"] ,"${modelName}"));
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