const { readContent } = require("../../IO/readFile");
const { writeFile } = require("../../IO/writeFile");
const { getTextModelDetail } = require("../../regex/modelRegex");
const { combineAllControllers } = require("./combineAll");

async function convertAllController(projectName,vscode) {
    var content = await readContent("/model/", "models.php", vscode);
    const getArrayRegex = /(\")(.*?)(\")/g;
    var modelList;


    while (modelList = getArrayRegex.exec(content)) {

        var pageContent = await readContent("/model/", modelList[2], vscode);
        if (pageContent != null && pageContent != "") {
            var modelDetail = getTextModelDetail(pageContent);
          var controller =  combineAllControllers(modelList[2].split(".")[0],modelDetail);
            
            await writeFile(`/${projectName}/controller/`, modelList[2].split(".")[0] + "Controller.js", vscode,controller);

        }

    }
}

module.exports = {
    convertAllController: convertAllController
}