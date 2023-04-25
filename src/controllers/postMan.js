

const { readContent } = require("../utils/IO/readFile");
const {writeFile} = require("../utils/IO/writeFile");
const { getRoutes } = require("../utils/postman/getRoute");
const info = require("../utils/postman/info");




async function postManGenerator(vscode) {

    // var pageContent = vscode.window.activeTextEditor.document.getText();
    var content = await readContent("/model/","models.php", vscode);
    const getArrayRegex = /(\")(.*?)(\")/g;
    var routeList;


    var allContent = info.generateInfo("testProj");

    while(routeList = getArrayRegex.exec(content)){
    
        var pageContent = await readContent("/routes/",routeList[2],vscode);
        if(pageContent != null && pageContent !=""){

            allContent.item.push(await getRoutes(pageContent,vscode));
        }

    }

   await writeFile("/postMan/","postManData.postman_collection",vscode, JSON.stringify(allContent));

}


module.exports = {
    postManGenerator: postManGenerator
}