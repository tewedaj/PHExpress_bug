const { readContent } = require("../IO/readFile");
const { getRoutes } = require("./getRoute");
const info = require("./info");
const { generateInfo } = require("./info");
const { generateItemGet } = require("./item");

//generate the whole file
async function generatePostManFile(vscode,postManFileName){

    var content = await readContent("/model/","models.php", vscode);
    const getArrayRegex = /(\")(.*?)(\")/g;
    var routeList;


    var allContent = info.generateInfo(postManFileName);

    while(routeList = getArrayRegex.exec(content)){
    
        var pageContent = await readContent("/routes/",routeList[2],vscode);
        if(pageContent != null && pageContent !=""){

            allContent.item.push(await getRoutes(pageContent,vscode));
        }

    }
        allContent["variable"] = [
            {
                "key": "url",
                "value": "http://localhost",
                "type": "string"
            }
        ]

    return allContent;

}


module.exports = {
    generatePostManFile: generatePostManFile
}