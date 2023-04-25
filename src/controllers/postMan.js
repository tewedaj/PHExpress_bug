

const { readContent } = require("../utils/IO/readFile");
const { writeFile } = require("../utils/IO/writeFile");
const { generatePostManFile } = require("../utils/postman/builder");
const { getRoutes } = require("../utils/postman/getRoute");
const info = require("../utils/postman/info");




async function postManGenerator(vscode) {


    vscode.window.showInputBox().then(async (res) =>{
        var allContent = await generatePostManFile(vscode,res);
        await writeFile("/postMan/", res+".postman_collection", vscode, JSON.stringify(allContent));
        vscode.window.showInformationMessage(`Successfully Done`);
    
    })


   
}


module.exports = {
    postManGenerator: postManGenerator
}