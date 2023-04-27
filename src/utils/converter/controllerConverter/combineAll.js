const {get, getBy} = require("./getController");
const { set } = require("./setController");
const { updateByC } = require("./updateController");




function combineAllControllers(modelName,modelDetail){

    return `
    const sequelize = require('../models/sequelize');
    const ${modelName} = require('../models/${modelName}');

        ${get(modelName)} \n \n
        ${getBy(modelName,modelDetail)} \n \n 
        ${set(modelName)} \n \n
        ${updateByC(modelName,modelDetail)}

    `;
}


module.exports = {
    combineAllControllers: combineAllControllers
}