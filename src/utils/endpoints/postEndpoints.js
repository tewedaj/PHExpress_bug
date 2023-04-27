


function post(modelName,modelDetail){
    var json = [];
    var obj = {};

    modelDetail.forEach(element => {
            obj[element.name] = element.type == "int"? 0 : element.type == "string"? "" : element.type == "DateTime"? "2023/12/03": "";
      

    });
    return `
     
        $app->post("/",function ($req, $res){
            $${modelName}Controller = new ${modelName}Controller($req, $res);   
            $${modelName}Controller->set${modelName}();
        });
    `;
}

module.exports = {
    post: post
};