const { select, selectBy, selectById } = require('../../utils/endpoints/selectEndpoint');
const { post } = require('../../utils/endpoints/postEndpoints');
const { updateBy } = require('../../utils/endpoints/patchEndpoints');
const { deleteBy } = require('../../utils/endpoints/deleteEndpoints');


function generateEndPoints(modelName,modelDetail){

    return `<?php
    include "./controller/${modelName}Controller.php";
    //auto generated file \n 
    
    $app = new phexpress();
    $app->setParent("${modelName}");

    ${select(modelName)} \n \n 
    ${selectBy(modelName,modelDetail)} \n \n
    ${post(modelName,modelDetail)} \n \n
    ${updateBy(modelName,modelDetail)} \n \n
    ${deleteBy(modelName,modelDetail)}

    `;
}


module.exports = {
    generateEndPoints: generateEndPoints
}
