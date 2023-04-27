


//Select * end point 
function select(modelName){
    var response = `
    app.get("/", function (req, res) {
        ${modelName}_controller.get${modelName}();
    });
    `;

    return response;
}


//Select modelName by id
function selectById(modelName){
    var response = `
    app.get("/:id", function (req, res) {
        ${modelName}_controller.getBy${modelName}(req.params.id).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
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
    
    app.get("/getBy${paramName}/:${paramName}", function (req, res) {
        ${modelName}_controller.getBy${paramName}(req.params.${paramName}).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
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