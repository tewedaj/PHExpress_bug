const { readContent } = require("../../IO/readFile");
const { writeFile } = require("../../IO/writeFile");
const { getTextModelDetail } = require("../../regex/modelRegex");
const {combineRoutes} = require("./combineRoutes");
// const { combineAllControllers } = require("./combineAll");

async function convertAllRoutes(projectName,vscode) {
    var content = await readContent("/model/", "models.php", vscode);
    const getArrayRegex = /(\")(.*?)(\")/g;
    var modelList;


    while (modelList = getArrayRegex.exec(content)) {

        var pageContent = await readContent("/model/", modelList[2], vscode);
        if (pageContent != null && pageContent != "") {
            var modelDetail = getTextModelDetail(pageContent);
          var endPoints = combineRoutes(modelList[2].split(".")[0],modelDetail);
            
            await writeFile(`/${projectName}/routes/`, modelList[2].split(".")[0] + ".js", vscode,endPoints);

        }

    }
}

module.exports = {
    convertAllRoutes: convertAllRoutes
}