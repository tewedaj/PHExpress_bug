const { select, selectBy } = require("./selectEndPointConvert");




    


function combineRoutes(modelName,modelDetail){
    return `
    var ${modelName}_controller = require("../controller/${modelName}Controller");
    //auto generated file \n 
    
    //$app = new phexpress();
    //$app->setParent("${modelName}");
    const express = require('express')
    const app = express()

    ${select(modelName)} \n \n 
    ${selectBy(modelName,modelDetail)} \n \n
    


    `;
}

module.exports = {
    combineRoutes: combineRoutes
}