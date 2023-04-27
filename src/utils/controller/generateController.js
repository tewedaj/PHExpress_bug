

const { get, getBy } = require('../../utils/controller/getController');
const { set } = require('../../utils/controller/setController');
const { updateByC } = require('../../utils/controller/updateController');
const { removeBy } = require('../../utils/controller/removeController');

function generateController(modelName , modelDetail){

    return `<?php
        
    class ${modelName}Controller extends ORM{
    
        private   $request;
        private   $response;
    
        function __construct($req,$res){
            $this->request = $req;
            $this->response = $res;
        }
    
        ${get(modelName)}  \n \n
        ${getBy(modelName,modelDetail)} \n \n
        ${set(modelName)} \n \n
        ${updateByC(modelName,modelDetail)} \n \n
        ${removeBy(modelName,modelDetail)}
    
    
    }
        `;
}

module.exports = {
    generateController: generateController
}