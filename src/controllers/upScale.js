

const { readContent } = require("../utils/IO/readFile");
const { writeFile } = require("../utils/IO/writeFile");
const { convertAllController } = require("../utils/converter/controllerConverter/eachModel");
const { convertAllRoutes } = require("../utils/converter/endPoint_converter/eachRoute");
const { convertAllModels } = require("../utils/converter/model_converter/converter");
const { configFileFile, getSetting, connectionFile } = require("../utils/converter/model_converter/dbConnection");
const { generatePostManFile } = require("../utils/postman/builder");
const { getRoutes } = require("../utils/postman/getRoute");
const info = require("../utils/postman/info");




async function upScale(vscode) {

    vscode.window.showInputBox().then(async (res) => {
        var setting = await getSetting(vscode);
        await configFileFile(res,setting,vscode);
        await connectionFile(res,vscode)
        await convertAllModels(res,vscode);
        await convertAllController(res,vscode);
        await convertAllRoutes(res,vscode);
        vscode.window.showInformationMessage(`Successfully Done`);
    })

}


module.exports = {
    upScale: upScale
}