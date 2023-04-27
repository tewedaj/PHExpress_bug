const { readContent } = require("../../IO/readFile");
const { writeFile } = require("../../IO/writeFile");
const { concatnateToLine } = require("../../contentManager/concatNewLine");
const { getTextModelDetail } = require("../../regex/modelRegex");



async function convertAllModels(projectName,vscode) {
    var content = await readContent("/model/", "models.php", vscode);
    const getArrayRegex = /(\")(.*?)(\")/g;
    var modelList;


    while (modelList = getArrayRegex.exec(content)) {

        var pageContent = await readContent("/model/", modelList[2], vscode);
        if (pageContent != null && pageContent != "") {

            var modelDetail = getTextModelDetail(pageContent);
            var modelSqulize = convertModel(modelList[2].split(".")[0], modelDetail);
           console.log(modelSqulize);
            await writeFile(`/${projectName}/models/`, modelList[2].split(".")[0] + "model.js", vscode,modelSqulize);

        }

    }
}






function convertModel(modelName, modelList) {

    var convertList = `
    const { DataTypes } = require('sequelize');
    const sequelizeCon = require('./connection');

    module.exports = (sequelizeCon, DataTypes) => {

        const ${modelName} = sequelizeCon.define("${modelName}", {

    `;
    modelList.forEach((model) => {
        convertList = concatnateToLine(convertList, convertSingleModel(model));
    });

    convertList = concatnateToLine(convertList, ` }); \n \n  return ${modelName}  \n \n };`);
return convertList;
}


function convertSingleModel(modelDetail) {
    if (modelDetail.name.toLowerCase() != "id") {
        return `
    ${modelDetail.name} : {
        type: DataTypes.${getType(modelDetail)},
        allowNull: false
    },
    `;
    } else {
        return `
    ${modelDetail.name} : {
        type: DataTypes.${getType(modelDetail)},
        allowNull: false
    },
    `;
    }
}


function getType(modelDetail) {
    return modelDetail.type.toUpperCase() == "INT" ? "NUMBER" : modelDetail.type.toUpperCase();
}


module.exports = {
    convertAllModels: convertAllModels
}