


function post(modelName,modelDetail){
    var json = [];
    var obj = {};

    modelDetail.forEach(element => {
            obj[element.name] = element.type == "int"? 0 : element.type == "string"? "" : element.type == "DateTime"? "2023/12/03": "";
      

    });
    return `
     
        $app->post("/",function ($req, $res){
            $res->send(200,insertInto("${modelName}",$req["body"]));
        });
    `;
}

module.exports = {
    post: post
};