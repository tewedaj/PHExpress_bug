
const { posix } = require('path');
const { readContent } = require("../utils/IO/readFile");
const { writeFile } = require('../utils/IO/writeFile');
const { concatnateToLine } = require('../utils/contentManager/concatNewLine');
const {getTextModelDetail} = require('../utils/regex/modelRegex');
const {generateController} = require('../utils/controller/generateController');
const { generateEndPoints } = require('../utils/endpoints/generateEndPointFile');
//todo: Take the model the command is run on
//todo: Creacte a route file with the model name
//todo: Create endpoint for each target in the route file
//todo: import the route file to index.php file
async function createCrud(vscode) {
    var pageContent = vscode.window.activeTextEditor.document.getText();
    var modelName = vscode.window.activeTextEditor.document.uri.toString().split("/")[vscode.window.activeTextEditor.document.uri.toString().split("/").length - 1].split(".php")[0];
    var modelDetail = getTextModelDetail(pageContent);
    var content = await readContent("/", "index.php", vscode);
    var newContent = concatnateToLine(content, `include "./routes/` + modelName + `.php";`);
    var codeBlock = generateEndPoints(modelName,modelDetail);
    var controller = generateController(modelName,modelDetail);

    writeFile("/controller/",modelName+"Controller.php",vscode,controller);
    writeFile("/", "index.php", vscode, newContent);
    writeFile("/routes/", modelName + '.php', vscode, codeBlock);

    return "Done"

}





module.exports = {
    createCrud: createCrud
}